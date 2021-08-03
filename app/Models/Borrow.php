<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    /**
    * Kolom Database yang bisa diisi secara massal
    *
    * @var array
    */
    protected $fillable = [
        'user_id',
        'book_id',
        'borrow_time',
        'deadline',
        'return_time',
    ];

    /**
     * Kolom database yang seharusnya tidak ditampilkan pada JSON
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
        'book_id',
    ];
}
