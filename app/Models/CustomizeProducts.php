<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizeProducts extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the base associated with the CustomizeProducts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function base()
    {
        return $this->hasOne(StockList::class,'id', 'base_id');
    }
    public function protein()
    {
        return $this->hasOne(StockList::class,'id', 'protein_id');
    }
    public function vegetable()
    {
        return $this->hasOne(StockList::class,'id', 'vegetable_id');
    }
    public function extra_topping()
    {
        return $this->hasOne(StockList::class,'id', 'extra_topping_id');
    }
}
