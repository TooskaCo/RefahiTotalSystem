<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    protected $table = 'Quota';
    protected  $fillable=['Period_Place_ID','FromDate','ToDate','Grade','QuotaType','DeclaredCapacity','DisposalCapacity','Price','ExtraCapacity','ExtraPeopleCount','IsLotteryResultConfrm','ConfirmBy','ConfirmTime'];
}
