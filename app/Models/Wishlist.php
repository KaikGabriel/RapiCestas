<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Wishlist extends Model

{

    use HasFactory;

    protected $table = 'wishlists';

    protected $fillable = [

        'user_id'.

        'produto_id'

    ];



    public function produtos():BelongsTo{

        return $this->belongsTo(Produtos::class, 'produto_id', 'id');

    }

}