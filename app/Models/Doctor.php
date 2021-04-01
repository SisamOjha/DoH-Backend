<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function doctors()
    {
    return $this->hasMany(Hospital::class);
   }
   public function specialist()
    {
    return $this->belongsTo(specialist::class);
   }
   public function images()
   {
   return $this->hasMany(DoctorImage::class);
  }

}
