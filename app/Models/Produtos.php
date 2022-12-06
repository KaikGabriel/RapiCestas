<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Produtos extends Model
{
    use HasFactory;
   
    protected $fillable = [

        'nome', 'valor', 'estado', 'cidade', 'categoria','contato', 'vendadoe','apr', 'user_id'

    ];

    protected $table = "produtos";

    public $timestamps = false;



    public function user(){

        return $this->belongsTo('App\Models\User');

    }
    
}
