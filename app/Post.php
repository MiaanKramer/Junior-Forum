<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public static function getPost($post_id) {

        return static::find($post_id);
    }

    public static function getPosts($id) {

        return static::where('user_id', $id)->get();
    }

}
