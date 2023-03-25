<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    use HasFactory;
    protected $fillable = [
        'txn_date',
        'pin',
        'receiver_number',
        'amount',
        'sender_number',
        'address',
        'bank_name',
        'bank_branch',
        'branch_name',
        'country',
        'payment_mode'
    ];
}
