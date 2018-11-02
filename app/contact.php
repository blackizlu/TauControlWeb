<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['contact_name', 'client_id', 'workstation', 'phone_number', 'email',];

    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }
}
