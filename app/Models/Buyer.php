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

    protected $fillable = ['_id', 'user_id', 'name', 'alamat', 'nomor_telepon'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
