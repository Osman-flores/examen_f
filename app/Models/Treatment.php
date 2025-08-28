<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatments';

    protected $fillable = [
        'status', 
        'cost', 
        'payment_status', 
        'name_doctor', 
        'area',
    ];

    public function dentalRecords()
    {
        return $this->hasMany(DentalRecord::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
