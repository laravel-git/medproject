<?php

namespace App;
use App\Doctor;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
