<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

    //setNameAttribute
    public function setPublishAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}
