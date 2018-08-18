<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\StorePost;
use App\Post_type;
use App\Media;
use Auth;
use Exception;
use foo\bar;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $post;
    protected $post_type;
    protected $media;

    public function __construct(Post $post, Post_type $post_type, Media $media){
        $this->post = $post;
        $this->post_type = $post_type;
        $this->media = $media;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'posts.index',
            ['posts' => $this->post
                ->where('user_id', Auth::user()->id)
                ->get(),
            'post_types' => $this->post_type->all()]
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
    public function store(StorePost $request)
    {
        $validated = $request->validated();

        $postTaken = $this->post
            ->where('published', '=', 'on')
            ->where('start_position_x', $request->position_x)
            ->where('start_position_y', $request->position_y)
            ->where('user_id', Auth::user()->id)
            ->first();

        if ((empty($postTaken)) || ($request->published == "")) {
            $post = $this->post->create([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'text' => $request->text,
                'type_id' => $request->type_id,
                'start_position_x' => $request->position_x,
                'start_position_y' => $request->position_y,
                'end_position_x' => $request->position_x,
                'end_position_y' => $request->position_y,
                'published' => $request->published,
            ]);

            if (isset($request->media)) {
                foreach ($request->file('media') as $key => $value) {
                    $this->uploadMedia($value, $request->title, $key, $post->id);
                }
            }
            return back();
        }
        else
        {
            return back()->with('error', 'You already published a post on this location.');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->post
            ->where('user_id', Auth::user()->id)
            ->find($id);

        if(!empty($post))
        {
            return view(
                'posts.show',
                ['post' => $post]
            );
        }
        else
        {
            return redirect('/posts')->with('error', 'Dit is geen post aangemaakt door '.Auth::user()->name);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
//        $validated = $request->validated();

        $postTaken = $this->post
            ->where('id', '<>', $request->post_id)
            ->where('start_position_x', $request->position_x)
            ->where('start_position_y', $request->position_y)
            ->where('user_id', Auth::user()->id)
            ->where('published', 'on')
            ->first();

        if (empty($postTaken))
        {
            $post = $this->post->find($request->post_id);
            $post->title = $request->title;
            $post->text = $request->text;
            $post->start_position_x = $request->position_x;
            $post->end_position_x = $request->position_x;
            $post->start_position_y = $request->position_y;
            $post->end_position_y = $request->position_y;
            if (empty($request->published))
            {
                $post->published = '';
            }
            else {
                $post->published = $request->published;
            }
            $post->save();
            return back();
        }
        else {
            return back()->with('error', 'You already published a post on this location.');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->post->destroy($id);
        $this->media->where('post_id', $id)->delete();

        return back();
    }

    public function grid()
    {
        return view(
            'grid.index',
            ['posts' => $this->post->where('published', '<>', '')->get()]
        );
    }

    public function uploadMedia($media, $title, $key, $post_id)
    {
        $FKmediaID = new Media();
        $extension = $media->getClientOriginalExtension();
        $filename = 'post-'.$post_id.'-'.str_replace(' ', '-', $title).'-'.$key.'-'.time().'.'.$extension;
        $altDescription = 'Picture from post with title: '.$title;
        $media->move('images/upload/', $filename);
        $media->source = $filename;
        $media = $this->media->create([
            'source' => $filename,
            'alt' => $altDescription,
            'post_id' => $post_id]);
    }

    public function deleteImage($mediaID)
    {
        $imageFile = $this->media->find($mediaID);
        $imagePath = "images/upload/" . $imageFile->source;
        File::delete($imagePath);
        $this->media->destroy($mediaID);
        return back();
    }
}
