<?php

namespace App\Models;

use App\Http\Controllers\DoctorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorImage extends Model
{
    use HasFactory;
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
