<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function getPosts($cat_id) {
        return static::where('category_id', $cat_id)->get();
    }

}
