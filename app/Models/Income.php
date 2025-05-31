<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $table = 'income';
    protected $fillable = [
        'total',
        'deskripsi',
        'transaction_date'
    ];

    protected $casts = [
        'transaction_date' => 'datetime'
    ];
}
