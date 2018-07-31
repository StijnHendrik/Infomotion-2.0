<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_type extends Model
{
    protected $fillable = ['type'];

    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
