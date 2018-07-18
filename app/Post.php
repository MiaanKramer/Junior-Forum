<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopeForUser($query, $user_id){
        return $query->where('user_id', $user_id);
    }

    public function scopeForCategory($query, $category_id){
        return $query->where('category_id', $category_id);
    }
}
