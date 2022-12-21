<?php

namespace App\Http\Controllers;

use App\Models\CommunityPost;
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = CommunityPost::all();
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
        $post = new CommunityPost();
        $post->topic = $request->topic;
        $post->bodyText = $request->bodyText;
        $post->postAuthor = $request->postAuthor;

        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\communityPost  $communityPost
     * @return \Illuminate\Http\Response
     */
    public function show(communityPost $communityPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\communityPost  $communityPost
     * @return \Illuminate\Http\Response
     */
    public function edit(communityPost $communityPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\communityPost  $communityPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, communityPost $communityPost)
    {
        $post = CommunityPost::findOrFail($request->$id);
        $post->topic = $request->topic;
        $post->bodyText = $request->bodyText;
        $post->postAuthor = $request->postAuthor;

        $post->save();
        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\communityPost  $communityPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(communityPost $communityPost)
    {
        $post = CommunityPost::destroy($id);
        return $post;
    }
}
