<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'thumbnail',
        'description',
        'price',
        'deadline',
        'status',
    ];

    public function client(){
        return $this->morphOne(Client::class, 'clientable');
    }

    public function payments(){
        return $this->morphMany(Payment::class, 'paymentable');
    }

    public function invoices(){
        return $this->morphMany(Invoice::class, 'invoiceable');
    }

    public function subscriptions(){
        return $this->morphMany(Subscription::class, 'subscriptionable');
    }
}
