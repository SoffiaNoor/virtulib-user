<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use MongoDB\Laravel\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'seller';

    protected $primaryKey = '_id';
    protected $fillable = ['_id', 'user_id', 'nama', 'nama_toko', 'alamat', 'nomor_telepon'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
