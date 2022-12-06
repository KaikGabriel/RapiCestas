<?php

namespace App\Http\Controllers;
use App\Models\Produtos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function mostrarCadastro(){
        return view ('cadastro');
    }


    public function Cadastrar(Request $request){

           $produtos = new Produtos;
   
           $produtos -> nome = $request -> nome;
   
           $produtos -> valor = $request -> valor;
   
           $produtos -> estado = $request -> estado;
   
           $produtos -> cidade = $request -> cidade;
   
           $produtos -> categoria = $request -> categoria;
   
           $produtos -> contato = $request -> contato;

           $produtos -> vendadoe = $request -> vendadoe;

           $produtos -> apr = $request -> apr;
   
           $user = auth() ->user();
   
           $produtos -> user_id = $user-> id;
   
      
   
      
   
           //image
   
   
   
   if ($request -> hasfile('image') && $request-> file('image')-> isValid()){
   
       $requestImage = $request->image;
   
       $extension = $requestImage-> extension();
   
       $imageName = md5($requestImage ->getClientOriginalName() . strtotime ("now") . "." . $extension);
   
       $request-> image->move(public_path('image/produtos'), $imageName);
   
       $produtos -> image = $imageName;
   
   
   }
   
           $produtos -> save();
   
           return Redirect::route('home');
   
    }



    

    


}
