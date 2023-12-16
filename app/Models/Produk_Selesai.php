<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Produk_Selesai extends Model
{
    use HasFactory;

    protected  $connection = 'mongodb';

    // equivalent to $table for MySQL
    protected  $collection = 'produk_selesai';

    // defines the schema for top-level properties (optional).
    protected  $fillable = ['pengiriman', 'jumlah_barang', 'total_harga', "id_produk", 'name', 'seller', 'gambar', "description", "price", "stock"];
}