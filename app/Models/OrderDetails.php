<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = ['order_id', 'payment_method_id', 'order_status_id', 'total_price'];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
