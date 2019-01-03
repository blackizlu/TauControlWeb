<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id', 'id');
    }


}
