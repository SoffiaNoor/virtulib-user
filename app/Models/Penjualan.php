<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'penjualan';
    protected $fillable = ['customer', 'productname', 'totalpurchase', "price", 'totalprice', 'delivery'];
}