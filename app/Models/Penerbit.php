<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    /**
    * Kolom Database yang bisa diisi secara massal
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'description',
        'url',
    ];
}
