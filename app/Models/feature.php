<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class feature extends Model
{
    use HasFactory;

    use SoftDeletes;

    use HasTranslations;

    public $translatable = ['title','notes'];

    protected $fillable = [
        'title',
        'notes',
        'photo',
        'active',
    ];


    public $appends = ['image'];


    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/features/' . $this->attributes['photo']) : null;

    }
}
