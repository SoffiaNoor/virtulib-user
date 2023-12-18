<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class MovedProducts extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'moved_products';

    protected $fillable = ['name', 'seller', 'gambar', "description", "price", "stock"];
}
