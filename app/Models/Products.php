<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Products extends Model
{
    use  HasFactory;
    protected  $connection = 'mongodb';
    protected  $collection = 'products';
    protected  $fillable = ['_id','name', 'seller_id', 'image', "description", "price", "stock"];

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}

