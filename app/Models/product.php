<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category',
        'mrp',
        'price',
        'quantity',
        'img1',
        'img2',
        'img3',
        'desc',
        'short_desc',
        'meta_title',
        'meta_desc',
        'meta_keyword',
        'status'
    ];
}
