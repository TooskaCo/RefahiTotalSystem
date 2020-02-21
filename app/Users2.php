<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users2 extends Model
{
    protected $table = 'Users2';
    protected $fillable=[ 'FirstName','LastName','UserName','Password','IsAdmin','IsExpert','IsGeneralUser', 'IsActive' ];
}
