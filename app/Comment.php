<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function getComments($post_id) {
        
        return static::where('post_id', $post_id);
    }
}