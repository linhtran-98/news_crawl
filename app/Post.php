<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\PostScope;

class Post extends Model
{
    protected $fillable = [
        'image', 'title', 'summary', 'description', 'publish'
    ];

    // protected static function booted()
    // {
    //     static::addGlobalScope(new PostScope());
    // }
}
