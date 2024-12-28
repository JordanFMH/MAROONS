<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobrenos extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'texto',
        'imagen',
        'status'
    ];
}
