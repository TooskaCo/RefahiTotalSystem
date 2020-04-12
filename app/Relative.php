<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    protected $table = 'Relative';
    protected $fillable=[ 'Person_ID','FirstName','LastName','NationalNumber','IdentificationNumber','RelativeType','IsDependent','BirthDate'  ];
}
