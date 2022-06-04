<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';
    protected $guarded = [];

    public function getProducts(){
        return $this->hasMany('App\Models\Product');
    }

    public function getCategory(){
        return $this->hasMany('App\Models\Category');
    }
}
