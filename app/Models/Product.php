<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        "catagory_id",
        "title",
        "price",
        "dis_price",
    ];

    public function productImage(){
        return $this->hasMany('App\Models\ProductImages','products_id');
    }
}
