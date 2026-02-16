<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <--- This line was missing
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'path',
    ];
}