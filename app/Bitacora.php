<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bitacora extends Model
{
    protected $fillable = ['user_id','client_id','contact_id','project_id','invoice_id','activity_id','modulo','message','type'];
    protected $table = 'bitacora';

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

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id')->withTrashed();
    }

    public function invoice()
    {
        return $this->hasOne(cotizaciones::class, 'id', 'invoice_id')->withTrashed();
    }

    public function activity()
    {
        return $this->hasOne(Activities::class, 'id', 'activity_id')->withTrashed();
    }



}
