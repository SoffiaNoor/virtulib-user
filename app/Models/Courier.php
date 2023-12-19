<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Courier extends Model
{
    use  HasFactory;
    protected  $connection = 'mongodb';
    protected  $collection = 'couriers';
    protected  $fillable = ['courier_id','delivery', 'deliverytime', 'deliveryprice'];

    public function seller()
    {
        return $this->belongsTo(User::class, 'courier_id');
    }
}

