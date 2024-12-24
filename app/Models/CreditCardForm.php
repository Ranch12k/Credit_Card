<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCardForm extends Model
{
    protected $table = 'credit_card_detail';

    // Mass assignable attributes
    protected $fillable = [
        'name', 'email', 'phone', 'fname', 'address', 'state', 'city', 'pincode', 
        'occupation', 'pancard', 'aadharcard'
    ];

  
}
