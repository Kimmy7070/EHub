<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'address',
        'zip',
        'city',
        'phone',
        'email',
        'pm'
    ];
}
