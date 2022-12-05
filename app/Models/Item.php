<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
