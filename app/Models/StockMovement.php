<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockMovement extends Model
{
    protected $fillable = [
        'product_id',
        'movement_type',
        'qty',
        'qty_before',
        'qty_after',
        'ref_type',
        'ref_id',
        'user_id'
    ];
}
