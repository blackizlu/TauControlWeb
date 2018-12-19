<?php

namespace App;

use Carbon\Carbon;
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
        return $this->hasOne(User::class, 'id', 'user_id')->withTrashed();;
    }

//mutadores :E

    public function getCompletedAttribute()
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

    public function getActivityNameAttribute()
    {
        $actividad = "";
        switch($this->attributes['activity']){

            case('cita'):
                $actividad = 'Cita';
                break;

            case('envio_correo'):
                $actividad = 'Enviar correo';
                break;

            case('instalacion_obra'):
                $actividad = 'Instalación de obra';
                break;

            case('llamada'):
                $actividad = 'Llamada';
                break;

            case('visita_obra'):
                $actividad = 'Visita a obra';
                break;

            default:
                $actividad = ' ';
                break;

        }
        return $actividad;
    }

    public function getImageAttribute()
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
    }

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
<<<<<<< HEAD
=======
>>>>>>> parent of 8f5e304... Varios cambios
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> parent of 29dad83... Cambios al 50% 2
=======
>>>>>>> parent of 3bfe4c7... Cambios. Dashboard 50% terminado
>>>>>>> parent of 279c8fe... commit
=======
>>>>>>> parent of 2efa6e9... Cambios
=======
>>>>>>> parent of 25eebe8... Cambios Eliminar descompuesto
}

