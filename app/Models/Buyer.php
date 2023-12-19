<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use MongoDB\Laravel\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'buyer';

    protected $fillable = ['_id', 'user_id', 'name', 'full_name', 'address', 'phone_number', 'birthdate', 'image'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
