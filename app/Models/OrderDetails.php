<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Payment;
use App\Models\OrderStatuses;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = ['order_id', 'payment_method_id', 'order_status_id', 'total_price'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_method_id');
    }

    public function status()
    {
        return $this->belongsTo(OrderStatuses::class, 'order_status_id');
    }
}
