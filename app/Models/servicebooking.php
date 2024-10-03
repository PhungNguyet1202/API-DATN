<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicebooking extends Model
{
    public function pets()
    {
        return $this->hasOne(Pet::class,'servicebooking_id');
    }
    public function services()
    {
        return $this->hasOne(Service::class,'servicebooking_id');
    }
}
