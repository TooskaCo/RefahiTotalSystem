<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $table = 'Personnel';
    protected $fillable=[ 'FirstName','LastName','NationalNumber','PersonnelNumber','GenderType','MaritalStatus','IdentificationNumber',
                        'BirthDate','EmploymentType','CooperationStartDate','CooperationEndDate','Mobile','Phone','Email','Password',
                        'IsActive','IsLogicalDeleted'  ];
}
