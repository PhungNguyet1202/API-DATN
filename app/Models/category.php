<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
    public function products()
    {
        return $this->hasMany(Produst::class, 'category_id');
    }
}
