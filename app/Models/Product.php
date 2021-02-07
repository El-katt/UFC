<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name_product",
        'sell_price_product',
        'available',
        'comment_product'
    ];

    public function supplier()
    {
        return $this->belongsToMany(supplier::class);
    }
}
