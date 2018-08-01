<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_type extends Model
{
    protected $fillable = ['type'];

    public function post()
    {
        return $this->hasMany('App\Post', 'type_id', 'id');
    }
}