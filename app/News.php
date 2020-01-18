<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'News';
    protected  $fillable=['Title','Date','Subject','PermissionType','Description','IsActive'];

}
