<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Project extends Model
{
    protected $fillable = ['name', 'phase', 'estimated_date', 'user_id','client_id', 'comments', 'docs', 'approved_docs','contact_id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withTrashed();
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'id','client_id');
    }

    public function contact()
    {
        return $this->hasOne(contact::class, 'id', 'contact_id')->withTrashed();
    }

    protected function DateTime(){
        $timezone = new DateTimeZone('America/Mexico_City');
        $date = DateTime::createFromFormat('d/m/Y',$timezone);
        Carbon::parse($date)->format('Y-m-d');
    }

    public function activities()
    {
        return $this->hasMany(Activities::class, 'project_id', 'id');
    }

    public function cotizacion()
    {
        return $this->hasMany(cotizaciones::class, 'project_id', 'id');
    }

    public function documents()
    {
        return $this->hasMany(Docs::class, 'project_id', 'id');
    }

    public function approvedDocs()
    {
        return $this->hasMany(ApprovedDocs::class, 'project_id', 'id');
    }

    public function getLastInvoiceAttribute()
    {
        return $this->cotizacion()->orderBy('id', 'desc')->first();
    }


    use SoftDeletes;

    protected $table = 'projects';

}
