<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;
    protected $guarded=[];
    public $appends=['image'];
    public $translatable = ['title', 'text'];

    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/sliders/'.$this->attributes['photo'] ) : null;

    }
}


