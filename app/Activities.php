<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';
    protected $fillable = ['deadline', 'time', 'activity', 'completed', 'comments', 'client_id', 'contact_id', 'project_id', 'user_id'];

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function contact()
    {
        return $this->hasOne(contact::class, 'id', 'contact_id');
    }

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getCompletedAttribute()//Accessor/Getter
    {
        return $this->attributes['completed'] == '1' ? true : false;
    }

}
