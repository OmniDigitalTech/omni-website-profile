<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    const YEARLY = "TAHUNAN";
    const MONTHLY = "MINGGUAN";
    const DAILY = "HARIAN";

    protected $fillable = [
        'subscriptionable_type',
        'subscriptionable_id',
        'name',
        'type',
        'billing_date',
        'date',
    ];
}
