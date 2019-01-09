<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipoCliente extends Model

{
    protected $fillable = ['name'];

    public function clients()
    {
        return $this->hasOne(Client::class, 'id', 'tipocliente_id')->withTrashed();
    }

    use SoftDeletes;

    protected $table = 'tipocliente';
}
