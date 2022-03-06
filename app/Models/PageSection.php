<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PageSection extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts = [
        'content' => 'array',
    ];
    public $appends=['image','name','title','text'];

    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/page-sections/'.$this->attributes['photo'] ) : null;
    }


    public function getNameAttribute()
    {
        if(App::isLocale('en'))
        {
            return $this->attributes['name_en'] ?? $this->attributes['name_ar'];
        }
        else{
            return $this->attributes['name_ar'] ?? $this->attributes['name_en'];
        }
    }
    public function getTitleAttribute()
    {
        if(App::isLocale('en'))
        {
            return $this->attributes['title_en'] ?? $this->attributes['title_ar'];
        }
        else{
            return $this->attributes['title_ar'] ?? $this->attributes['title_en'];
        }
    }

    public function getTextAttribute()
    {
        if(App::isLocale('en'))
        {
            return $this->attributes['text_en'] ?? $this->attributes['text_ar'];
        }
        else{
            return $this->attributes['text_ar'] ?? $this->attributes['text_en'];
        }
    }


    public function page(){
        return $this->belongsTo(Custom::class);
    }
}
