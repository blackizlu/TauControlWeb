<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipoCliente extends Model

{
    protected $fillable = ['name'];

    public function tipo()
    {

        return $this->hasOne(Client::class, 'tipo_id', 'id');
    }

    use SoftDeletes;

    protected $table = 'tipocliente';
}
