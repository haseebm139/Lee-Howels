<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function customize_product()
    {
        return $this->belongsTo(CustomizeProducts::class, 'customize_product_id');
    }
}
