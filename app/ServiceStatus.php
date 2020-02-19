<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceStatus extends Model
{
    protected $table = 'ServiceStatus';
    protected  $fillable=[ 'Service_ID','StatusType','StatusTime','IsLastStatus'];
}
