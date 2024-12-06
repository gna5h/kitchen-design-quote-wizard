<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'length',
        'width',
        'layout',
        'color',
        'square_footage',
        'quote',
        'email',
        'name',
    ];
}
