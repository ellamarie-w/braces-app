<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = BlogPost::all();
        return $post;
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
        $post = new BlogPost();
        $post->postTitle = $request->postTitle;
        $post->bodyText = $request->bodyText;
        $post->thumbnailImg = $request->thumbnailImg;

        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(blogPost $blogPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(blogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogPost $blogPost)
    {
        $post = BlogPost::findOrFail($request->$id);
        $post->postTitle = $request->postTitle;
        $post->bodyText = $request->bodyText;
        $post->thumbnailImg = $request->thumbnailImg;

        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogPost $blogPost)
    {
        $post = BlogPost::destroy($id);
        return $post;
    }
}
