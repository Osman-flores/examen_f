<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'duration', 
        'date', 
        'treatment', 
        'reason',
        'name_client',
        'number_client',
        'patients_id',
        'dentits_id'
    ];

    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }

    public function dentits()
    {
        return $this->belongsTo(Dentit::class);
    }

}
