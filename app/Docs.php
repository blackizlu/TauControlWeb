<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Docs extends Model
{
    protected $fillable = ['project_id', 'file'];

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id')->withTrashed();
    }

    public function getDocNameAttribute()
    {
        return str_replace("docs/", "", $this->attributes['file']);
    }

    use SoftDeletes;
    protected $table = 'documents';
}
