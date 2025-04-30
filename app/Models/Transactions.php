<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table = 'table_transactions';
    protected $fillable = [
        'user_id',
        'category_id',
        'amount',
        'type',
        'description',
        'transaction_date',
    ];
}
