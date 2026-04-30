<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockLocation extends Model
{
    protected $fillable = [
        'product_id',
        'warehouses_id',
        'qty_available',
        'qty_reserved'
    ];
}
