<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['client_name', 'type', 'office_number', 'web_page', 'notes', 'user_id'];

    public function contacts()
    {
        return $this->hasOne(Contact::class, 'client_id', 'id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

}
