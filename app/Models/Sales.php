<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Sales extends Model
{
    use  HasFactory;

    // the selected database as defined in /config/database.php
    protected  $connection = 'mongodb';

    // equivalent to $table for MySQL
    protected  $collection = 'sales';

    // defines the schema for top-level properties (optional).
    protected  $fillable = ['customer', 'productname', 'totalpurchase', "price", "totalprice", "delivery"];
}
