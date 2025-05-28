<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    // Nama tabel, kalau Laravel sudah otomatis mengenali 'categories' dari nama model 'Categories', ini opsional:
    // protected $table = 'categories';

    // Field yang boleh diisi massal (mass assignable)
    protected $fillable = [
        'name'
    ];

    // Jika kamu mau relasi ke transactions:
    public function transactions()
    {
        return $this->hasMany(Transactions::class, 'category_id');
    }
}
