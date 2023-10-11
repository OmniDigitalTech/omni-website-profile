<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoiceable_type',
        'invoiceable_id',
        'name',
        'description',
        'qty',
        'price',
    ];
}
