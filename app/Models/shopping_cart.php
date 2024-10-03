<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopping_cart extends Model
{
    public function cartitem()
    {
       // return $this->hasMany(Cartitem::class,'shoppingcart_id');
    }
}
