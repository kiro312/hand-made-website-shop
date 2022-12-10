<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatuses extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_statuses_title', 'order_statuses_description'
    ];
}
