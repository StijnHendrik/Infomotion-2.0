<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'text', 'media_id', 'type_id', 'start_position_x', 'end_position_x', 'start_position_y', 'end_position_y', 'published'];

    public function posttype()
    {
        return $this->belongsTo('App\Post_type', 'type_id');
    }

    public function media()
    {
        return $this->hasMany('App\Media');
    }
}