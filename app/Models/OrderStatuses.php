<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetails;

class OrderStatuses extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_statuses_title', 'order_statuses_description'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_status_id');
    }
}
