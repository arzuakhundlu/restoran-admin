<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    protected $table = 'product_images';
    protected $fillable = [
        'products_id',
        'images'
    ];

    protected $appends = ["image_full_url"];
    public function getImageFullUrlAttribute(){
        if($this->images){
            return asset("storage/{$this->images}");
        }
        else{
            return '';
        }
    }


}
