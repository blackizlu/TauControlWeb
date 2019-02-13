<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $fillable = ['user_id','modulo','type'];
    protected $table = 'activities';

}
