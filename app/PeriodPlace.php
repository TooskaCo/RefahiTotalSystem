<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodPlace extends Model
{
    protected $table = 'PeriodPlace';
    protected  $fillable=['Period_ID','Place_ID','DeclaredCapacity','DisposalCapacity','QuotaType','Price','QuotaDuration','ExtraCapacity','ExtraPeopleCount'];
}
