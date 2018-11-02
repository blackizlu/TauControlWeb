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

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
