<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    protected $fillable = ['client_name', 'type', 'office_number', 'web_page', 'notes', 'user_id'];

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'client_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withTrashed();
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id', 'id');
    }

    public function activities()
    {
        return $this->hasMany(Activities::class, 'client_id', 'id');
    }

    use SoftDeletes;

    protected $table = 'clients';
}
