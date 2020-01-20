<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = 'Period';
    protected  $fillable=['Title','StartDate','EndDate','ReserveStartDate','ReserveEndDate','LotteryDate'];

}
