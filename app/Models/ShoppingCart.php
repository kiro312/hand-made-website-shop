<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $table = 'shopping_carts';
    protected $fillable = [
        'user_id', 'item_id', 'item_quantity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
