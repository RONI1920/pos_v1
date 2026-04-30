<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'categories_id',
        'sku',
        'name produk',
        'description',
        'image',
        'buy_price',
        'sell_price',
        'stok_qty'
    ];
}
