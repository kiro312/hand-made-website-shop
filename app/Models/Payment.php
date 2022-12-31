<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetails;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_method', 'payment_method_description'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'payment_method_id');
    }
}
