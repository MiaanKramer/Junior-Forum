<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Post;
use App\Comment;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $user = Auth::user();

        $posts = Post::getPosts($user->id);

        return view('posts.post-index', compact('posts', 'user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view the create form

        $user = Auth::user();

        $create = true;

        return view('posts.post-form', compact('create', 'user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // do an actual post, redirect to post detail
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show post detail with comments

        $user = Auth::user();

        $post = Post::getPost($id);

        $comments = Comment::getComments($id);

        return view('posts.post-detail', compact('post', 'user', 'comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // view the edit form
        $user = Auth::user();

        $post = Post::getPost($id);

        $create = false;

        return view('posts.post-form', compact('user', 'post', 'create'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // do actual update, redirect back to post detail
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = Auth::user();

        Post::destroy($id);

        return view('posts.post-index', compact('user'));
        // delete the post, redirect back to index
    }
}
