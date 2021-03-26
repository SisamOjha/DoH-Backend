<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalImage extends Model
{
    use HasFactory;
    public function hospital()
    {
        return $this->belongsTo(HospitalController::class);
    }
}
