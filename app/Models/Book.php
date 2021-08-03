<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
    * Kolom Database yang bisa diisi secara massal
    *
    * @var array
    */
    protected $fillable = [
        'nisbn',
        'title',
        'description',
        'image',
        'rating',
        'available',
        'penerbit_id',
        'pengarang_id',
    ];

    /**
     * Kolom database yang seharusnya tidak ditampilkan pada JSON
     *
     * @var array
     */
    protected $hidden = [
        'penerbit_id',
        'pengarang_id',
    ];

    /**
     * Kolom database yang perlu dikonversi menjadi tipe data tertentu
     *
     * @var array
     */
    protected $casts = [
        'rating' => 'double',
        'available' => 'integer',
    ];
}
