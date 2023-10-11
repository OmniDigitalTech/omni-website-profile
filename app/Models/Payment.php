<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    const DOWN_PAYMENT = 'DOWN PAYMENT';
    const REPAYMENT = 'REPAYMENT';

    const PAID = 'PAID';
    const PENDING = 'PENDING';

    protected $fillable = [
        'paymentable_type',
        'paymentable_id',
        'type',
        'value',
        'status',
    ];
}
