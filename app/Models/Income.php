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
        'transaction_date',
        'user_id'
    ];

    protected $casts = [
        'transaction_date' => 'datetime'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}

