<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;
class Cart extends Model
{
    use HasFactory;
    protected  $connection = 'mongodb';

    protected  $collection = 'cart';

    protected  $fillable = ['name', 'image_path', 'price', "counter", "total_price"];
}
