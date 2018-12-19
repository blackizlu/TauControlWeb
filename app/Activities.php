<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Activities extends Model
{
    protected $table = 'activities';
    protected $fillable = ['start', 'end', 'time', 'activity', 'completed', 'comments', 'client_id', 'contact_id', 'project_id', 'user_id'];
    protected $append = ['color'];

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

    public function getColorAttribute()
    {
        $color = "";
        switch ($this->attributes['activity']) {

            case('cita'):
                $color = '#ff6666';
                break;

            case('envio_correo'):
                $color = '#4fb7fe';
                break;

            case('instalacion_obra'):
                $color = '#ff9933';
                break;

            case('llamada'):
                $color = '#00cc99';
                break;

            case('visita_obra'):
                $color = '#347dff';
                break;

            default:
                $color = '#737373';
                break;

        }
        return $color;
    }


    public function getHoraAttribute()//Para que aparezca la hora en el evento del calendario
    {
        return $this->attributes['start'] . 'T' . $this->attributes['time'];
    }

    public function getDateAttribute($start)
    {
        return Carbon::parse($start)->format('d/m/Y') . ' ' . $this->attributes['time'];
    }


}

