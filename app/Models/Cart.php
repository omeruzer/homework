<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $guarded = [];

    public function getCartProduct(){
        return $this->hasMany('App\Models\CartProduct','cart_id');
    }
}
