<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Item;

class OrderItemDetails extends Model
{
    use HasFactory;
    protected $table = 'order_item_details';
    protected $fillable = ['order_id', 'item_id', 'item_quantity'];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function items()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
