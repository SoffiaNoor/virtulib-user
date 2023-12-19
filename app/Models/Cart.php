<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';

    protected $collection = 'cart';

    protected $fillable = ['_id', 'product_id', 'seller_id', 'already_paid', 'quantity', 'total_price'];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
