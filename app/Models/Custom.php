<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Custom extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    public $appends=['image','name','title'];
    protected $casts = [
        'seo_tags_en' => 'array',
        'seo_tags_ar' => 'array',
    ];
    protected $with = ['sections'];

    //att
    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/custom-page/'.$this->attributes['photo'] ) : null;
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
    //rel

    public function sections(){
        return $this->hasMany(PageSection::class)->orderBy('order_view');
;
    }

}
