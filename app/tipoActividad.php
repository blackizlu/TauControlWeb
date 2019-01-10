<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipoActividad extends Model
{
    protected $fillable = ['name'];

    public function tipo()
    {

        return $this->hasOne(Client::class, 'tipoact_id', 'id');
    }

    use SoftDeletes;

    protected $table = 'tipoactivity';
}
