<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = 'Personnel';
    protected  $fillable=[ 'FirstName','LastName','NationalNumber','PersonnelNumber'];
}
