<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DentalRecord extends Model
{
    protected $table = 'dental_records';

    protected $fillable = [
        'date', 
        'treatment', 
        'progress', 
        'allergiances',
        'patient_id',
        'treatment_id'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

}
