<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = "order_items";
    protected $fillable = [
        'quantity',
        'cloth_id',
        'order_id'
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function cloth()
    {
        return $this->hasOne(Cloth::class,'cloth_id');
    }
}