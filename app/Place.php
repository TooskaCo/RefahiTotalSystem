<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'Place';
    protected  $fillable=[ 'Title','StateCity_ID','Phone','Address','EntryTime','ExitTime','NegativeEffectDuration','Description'];
}
