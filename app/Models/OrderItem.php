<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasOne(Item::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
