<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    function index() {

        $categories = DB::table('categories');

        return view('categories.index', compact('categories'));
    }

    function catSelect($id) {

        $category = DB::table('categories')->find($id);

        return view('categories.show', compact('category'));

    }
}
