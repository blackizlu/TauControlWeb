<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id', 'id')->withTrashed();
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withTrashed();
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id')->withTrashed();
    }

    public function contact()
    {
        return $this->hasOne(contact::class, 'id', 'contact_id')->withTrashed();
    }

    //Mutadores :E

}
