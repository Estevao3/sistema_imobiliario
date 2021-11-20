<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\Cropper;
use Illuminate\Support\Facades\Storage;

class PropertyImage extends Model
{
    protected $fillable = [
        'property',
        'path',
        'cover'
    ];

    public function getUrlCroppedAttribute()
    {
        return Storage::url(Cropper::thumb($this->path, 1366, 768));
    }
}
