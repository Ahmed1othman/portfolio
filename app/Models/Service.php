<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    protected $fillable = [
        'title',
        'notes',
        'photo',
        'active',
    ];

    public $translatable = ['title', 'notes'];

    public $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->attributes['photo'] != null ? asset('storage/services/' . $this->attributes['photo']) : null;
    }
}
