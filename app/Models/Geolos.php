<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geolos extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'status'
    ];
}
