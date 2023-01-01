<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItemDetails;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name', 'item_description', 'item_price'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'item_categories');
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class, 'item_offers');
    }

    public function shoppingCarts()
    {
        return $this->belongsToMany(ShoppingCart::class);
    }

    public function orderItemDetails()
    {
        return $this->hasMany(OrderItemDetails::class, 'item_id');
    }
}
