<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activities extends Model
{
    protected $fillable = ['start', 'end', 'time', 'activity', 'completed', 'comments', 'client_id', 'contact_id', 'project_id', 'user_id', 'tipoact_id'];
    protected $append = ['color'];
    use SoftDeletes;
    protected $table = 'activities';

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id')->withTrashed();
    }

    public function contact()
    {
        return $this->hasOne(contact::class, 'id', 'contact_id')->withTrashed();
    }

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id')->withTrashed();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withTrashed();
    }

    public function tipoactividad()
    {
        return $this->hasOne(tipoActividad::class, 'id', 'tipoact_id')->withTrashed();
    }

    //////////////////////// Mutadores >:E

    public function getCompletedAttribute()
    {
        return $this->attributes['completed'] == '1' ? true : false;
    }


    /*    public function getImageAttribute()
        {
            $image = "";
            switch($this->attributes['activity']){

                case('cita'):
                    $image = 'cita.png';
                    break;

                case('envio_correo'):
                    $image = 'enviarmail.png';
                    break;

                case('instalacion_obra'):
                    $image = 'visitaobra.png';
                    break;

                case('llamada'):
                    $image = 'llamada.png';
                    break;

                case('visita_obra'):
                    $image = 'visita';
                    break;

                default:
                    $image = '#737373';
                    break;

            }
            return $image;
        }*/

    public function getFullNameAttribute()
    {
        return $this->attributes['name'] . ' ' . $this->attributes['last_name'];
    }

    public function getHoraAttribute()//Para que aparezca la hora en el evento del calendario
    {
        return $this->attributes['start'] . 'T' . $this->attributes['time'];
    }

    public function getDateAttribute($start)
    {
        return Carbon::parse($start)->format('d/m/Y') . ' ' . $this->attributes['time'];
    }

    public function getFechahoyAttribute()
    {
        $date = Carbon::now();
        return Carbon::parse($date)->format('m/d/Y');
    }

    public function getFechaendAttribute($end)
    {
        return Carbon::parse($end)->format('d/m/Y');
    }

}

