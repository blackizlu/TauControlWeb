<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'phase', 'estimated_date', 'user_id','client_id', 'comments'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withTrashed();
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id','client_id');
    }

    protected function DateTime(){
        $timezone = new DateTimeZone('America/Mexico_City');
        $date     = DateTime::createFromFormat('d/m/Y',$timezone);
        Carbon::parse($date)->format('Y-m-d');
    }

    public function activities()
    {
        return $this->hasMany(Activities::class, 'project_id', 'id');
    }

}
