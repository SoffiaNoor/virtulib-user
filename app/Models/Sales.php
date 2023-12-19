<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'sales';
    protected $fillable = ['product_id', 'total_purchase', 'price', 'total_price'];
}
