<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApprovedDocs extends Model
{
    protected $fillable = ['project_id', 'file'];

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id')->withTrashed();
    }

    public function getDocNameAttributes()
    {
        return $Doc_Name= str_replace("approved_docs/", "", $this->attributes['file']);

    }

    use SoftDeletes;

    protected $table = 'approveddocs';
}
