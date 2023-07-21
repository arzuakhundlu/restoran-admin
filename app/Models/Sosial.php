<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosial extends Model
{
    use HasFactory;

    protected $table = 'sosials';

    protected $fillable = [
        'name',
        'link'
    ];
}
