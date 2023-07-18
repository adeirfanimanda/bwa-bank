<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'user_id',
        'transaction_type_id',
        'payment_method_id',
        'product_Id',
        'amount',
        'description',
        'status',
        'transaction_code'
    ];
}