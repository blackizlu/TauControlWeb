<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class cotizaciones extends Model
{

    protected $fillable = ['project_id','currency','amount','request','realization','sold_date','sold','file'];

    public function project()
    {
        return $this->hasOne(Project::class, 'id', 'project_id')->withTrashed();
    }

    protected function DateTime(){
        $timezone = new DateTimeZone('America/Mexico_City');
        $date     = DateTime::createFromFormat('d/m/Y',$timezone);
        Carbon::parse($date)->format('Y-m-d');
    }

    public function setFileAttribute($file)
    {
        if(!empty($file))
        {
            $temp = explode('.', $file->getClientOriginalName());
            $extension = end($temp);
            $fileName = str_random(50) . '.' . $extension;
            Storage::disk('public')->put('cotizacion/' . $fileName, File::get($file));
            $this->attributes['file'] = 'cotizacion/' . $fileName;
        }
    }

    //Mutadores :E

    public function getPriceAttribute($amount)
    {
        return $this->attributes['amount'] = sprintf('$ %s', number_format($amount, 2));
    }


    use SoftDeletes;

    protected $table = 'cotizacion';


}
