<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $fillable = ['product_id', 'quantity', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
