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
        'img-1',
        'img-2',
        'img-3',
        'desc',
        'short-desc',
        'meta-title',
        'meta-desc',
        'meta-keyword',
        'status'
    ];
}
