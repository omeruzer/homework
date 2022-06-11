<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    use HasFactory;
    protected $table = 'cart_products';
    protected $guarded = [];

    public function getProduct(){
        return $this->hasMany('App\Models\Product','id','product_id');
    }
}
