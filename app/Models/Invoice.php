<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    const PAID = "LUNAS";
    const WAITING_PAYMENT = "MENUNGGU PEMBAYARAN";

    protected $fillable = [
        'invoiceable_type',
        'invoiceable_id',
        'code',
        'status'
    ];

    public function items(){
        return $this->morphMany(InvoiceItem::class, 'invoiceable');
    }

    public function getTotalAmountAttribute()
    {
        return $this->items->sum(function($invoice) {
            return $invoice->qty * $invoice->price;
        });
    }
}
