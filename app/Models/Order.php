<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];


    public function getCart(){
        return $this->hasOne('App\Models\Cart','id','cart_id');
    }

    
}
