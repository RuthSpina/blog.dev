<?php

class PostsController extends \BaseController
{
    public function __construct()
    {
        // call base controller constructor
        parent::__construct();

        // run auth filter before all methods on this controller except index and show
        $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return View::make('posts.index')->with('posts', $posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), Post::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);

        } else {
            $post = new Post();
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->img = Input::get('image');
            $post->save();

            Session::flash('successMessage', 'Post created successfully.');

            return Redirect::action('PostsController@index');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            App::abort(404);
        }

        return View::make('posts.show')->with('post', $post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return View::make('posts.edit')->with('post', $post);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $validator = Validator::make(Input::all(), Post::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);

        } else {
            $post = Post::find($id);
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->save();

            return Redirect::action('PostsController@index');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            App::abort(404);
        }

        $post->delete();

        Log::info('Post successfully deleted.');
        Session::flash('successMessage', 'Post deleted successfully.');

        return Redirect::action('PostsController@index');
    }
}
