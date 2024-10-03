<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function orderdetail()
    {
        return $this->hasMany(Orderdetail::class, 'order_id');
    }
    public function shipping()
    {
        return $this->hasMany(Shipping::class, 'order_id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'order_id');
    }
}
