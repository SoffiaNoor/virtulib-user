<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Produk_Pesan extends Model
{
    use HasFactory;

    protected  $connection = 'mongodb';
    protected  $collection = 'produk_pesan';
    protected  $fillable = ['pengiriman', 'jumlah_barang', 'total_harga', "id_produk", 'name', 'seller', 'gambar', "description", "price", "stock"];
}