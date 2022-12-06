<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use App\Models\ProdutosAp;
use App\Models\Produtos;
use App\Models\Wishlist;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;


class produtosApController extends Controller
{


    
    public function addToProdutosAp($produto_id){

        if (Auth::check()){

        ProdutosAp::insert([

            'user_id' => Auth::id(),

            'produto_id' => $produto_id,

        ]);

        return Redirect::route('dashboard');

    }else{

        return Redirect::route('register');

    }

    }


    public function mostrarAprovar(){
        $produtos = Produtos::all();
        $produtosAp = ProdutosAp::all();
        $user = auth()-> user();
        $users = User::all();
       
        return view('aprovarCadastro', ['produtosAp'=>$produtosAp, 'produtos' => $produtos, 'user' => $user,'users' => $users]);

    }

    public function mostrarProdutos(){
        $produtos = Produtos::all();
        $produtosAp = ProdutosAp::all();
        $user = auth()-> user();
        return view('produtos', ['produtosAp'=>$produtosAp, 'produtos' => $produtos, 'user' => $user]);
    }

    public function destroy($id){

       // Wishlist::all()-> where(produto_id->$id);
      $dele =  Wishlist::where('produto_id', $id);
        $dele->delete();
      // Wishlist::where('produto_id', $id)->delete();

      //Wishlist::findOrFail($id) -> delete();  
      Produtos::findOrFail($id) -> delete();


        return redirect('gerenciar');
 
    }
   
    public function update(Request $request){

        Produtos::findOrFail($request -> id) -> update ($request -> all());
        return redirect('gerenciar');

    }

   
 public function edit($id){
    $produto = Produtos::findOrFail($id);
    return redirect('gerenciar');

}
public function mostrarGrenciar(){

    $user = auth()-> user();
   
    $produtos = $user -> produtos;
    return view('Gerenciar', [ 'produtos' => $produtos, 'user' => $user ]);
  

}


    public function destroyUser($id){

       
        $users = User::findOrFail($id) -> delete();
        return redirect('gerenciar');
 
    }


}
