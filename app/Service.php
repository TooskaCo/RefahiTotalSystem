<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'Service';
    protected  $fillable=[ 'Person_ID','Quota_ID'];
}
