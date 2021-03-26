<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorImage extends Model
{
    use HasFactory;
    public function Doctor()
    {
        return $this->belongsTo(DoctorController::class);
    }
}
