<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Products::class, 'id', 'client_id');
    }

    use SoftDeletes;

    protected $table = 'categories';
}
