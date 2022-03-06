<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    public $appends=['image'];


    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/sliders/'.$this->attributes['photo'] ) : null;

    }
}


