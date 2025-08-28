<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentit extends Model
{
    protected $table = 'dentits';

    protected $fillable = [
        'name', 
        'record', 
        'address', 
        'gender', 
        'age', 
        'p_Birth', 
        'nationality', 
        'email', 
        'allergies', 
        'telephone', 
        'speciality', 
        'ethnicity', 
        'country', 
        'municipality'
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

}
