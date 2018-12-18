<?php

namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['name', 'last_name', 'image', 'phone_number'];

    public function setImageAttribute($image)
    {
        if(!empty($image))
        {
            $temp = explode('.', $image->getClientOriginalName());
            $extension = end($temp);
            $imageName = str_random(50) . '.' . $extension;
            Storage::disk('public')->put('users/' . $imageName, File::get($image));
            $this->attributes['image'] = 'users/' . $imageName;
        }
    }

    public function getImageAttribute()
    {
        return $this->attributes['image'] != null ? 'storage/' . $this->attributes['image'] : 'images/default.png';
    }

    public function getFullNameAttribute()
    {
        return $this->attributes['name'] . ' ' . $this->attributes['last_name'];
    }
}
