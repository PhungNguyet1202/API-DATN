<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }
    public function cartitem()
    {
        return $this->hasMany(Cartitem::class, 'product_id');
    }
    public function stockin()
    {
        return $this->hasMany(Stockin::class, 'product_id');
    }
    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'product_id');
    }
    public function orderdetail()
    {
        return $this->hasMany(Orderdetail::class, 'product_id');
    }
}
