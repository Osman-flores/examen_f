<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'name', 
        'identification',
        'p_Birth', 
        'age', 
        'addres', 
        'sex', 
        'nationality', 
        'ethnicity', 
        'telephone', 
        'departament', 
        'responsible', 
        'country',
        'mail', 
        'municipality', 
        'marital_status',
    ];

    public function dentalRecords()
    {
        return $this->hasMany(DentalRecord::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}