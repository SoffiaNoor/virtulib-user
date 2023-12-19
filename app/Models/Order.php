<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'order';

    protected $fillable = ['_id', 'user_id', 'seller_id', 'product_id', 'total_quantity', 'total_price', 'status'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

}
