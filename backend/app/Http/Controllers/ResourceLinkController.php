<?php

namespace App\Http\Controllers;

use App\Models\ResourceLink;
use Illuminate\Http\Request;

class ResourceLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link = ResourceLink::all();
        return $link;
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
        $link = new ResourceLink();
        $link->linkTitle = $request->linkTitle;
        $link->linkDescription = $request->linkDescription;
        $link->Url = $request->Url;

        $link->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResourceLink  $resourceLink
     * @return \Illuminate\Http\Response
     */
    public function show(ResourceLink $resourceLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResourceLink  $resourceLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ResourceLink $resourceLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $link = ResourceLink::findOrFail($id);
        $link->linkTitle = $request->linkTitle;
        $link->linkDescription = $request->linkDescription;
        $link->Url = $request->Url;

        $link->save();
        return $link;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = ResourceLink::destroy($id);
        return $link;
    }
}
