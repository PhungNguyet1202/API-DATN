<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockin extends Model
{
    public function inventory()
    {
      //  return $this->hasMany(Inventory::class, 'stockin_id');
    }
}

