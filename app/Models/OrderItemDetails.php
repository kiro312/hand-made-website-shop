<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderItemDetails extends Model
{
    use HasFactory;
    protected $table = 'order_item_details';
    protected $fillable = ['order_id', 'item_id', 'item_quantity'];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}