<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'amountpaid', 
        'payment_date', 
        'payment_type', 
        'treatments_id',
    ];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

}
