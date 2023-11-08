<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the product associated with the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function customize_product()
    {
        return $this->belongsTo(CustomizeProducts::class, 'customize_product_id');
    }
}
