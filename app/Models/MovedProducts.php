<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class MovedProducts extends Model
{
    use HasFactory;

    protected  $connection = 'mongodb';

    // equivalent to $table for MySQL
    protected  $collection = 'moved_products';

    // defines the schema for top-level properties (optional).
    protected  $fillable = ['name', 'seller', 'gambar', "description", "price", "stock"];
}
