<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'email', 'password', 'type',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }

    public function bitacora()
    {
        return $this->hasMany(Bitacora::class, 'user_id', 'id');
    }

    public function setPasswordAttribute($password)
    {
        if (!empty($password))
            $this->attributes['password'] = bcrypt($password);
    }
}
