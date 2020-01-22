<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    protected $table = 'Quota';
    protected  $fillable=['Period_ID','Place_ID','DeclaredCapacity','DisposalCapacity','QuotaType','Price','QuotaDuration','ExtraCapacity','ExtraPeopleCount'];
}
