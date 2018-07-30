<?php

namespace App\Http\Controllers;

use App\Post_type;
use App\Post;

use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    protected $posttypes;

    public function __construct(Post_type $post_type){
        $this->posttypes = $post_type;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_types = Post_type::all();
        return view(
            'posttype.index',
            [$this->posttypes->all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post_type  $post_type
     * @return \Illuminate\Http\Response
     */
    public function show(Post_type $post_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post_type  $post_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Post_type $post_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post_type  $post_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post_type $post_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post_type  $post_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_type $post_type)
    {
        //
    }
}
