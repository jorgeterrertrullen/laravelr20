<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function producttype()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function product_type()
    {
        return $this->belongsTo(ProductType::class);
    }
}
