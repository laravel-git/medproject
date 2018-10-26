<?php

namespace App;
use App\Payment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{



    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
