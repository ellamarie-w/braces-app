<?php

namespace App\Http\Controllers;

use App\Models\LibraryItems;
use Illuminate\Http\Request;

class LibraryItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraryItem = LibraryItems::all();
        return $libraryItem;
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
        $item = new LibraryItems();
        $item->docTitle = $request->docTitle;
        $item->docImage = $request->docImage;
        $item->docAuthor = $request->docAuthor;
        $item->docDescription = $request->docDescription;
        $item->docFile = $request->docFile;

        $item->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LibraryItems  $libraryItems
     * @return \Illuminate\Http\Response
     */
    public function show(LibraryItems $libraryItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LibraryItems  $libraryItems
     * @return \Illuminate\Http\Response
     */
    public function edit(LibraryItems $libraryItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LibraryItems  $libraryItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LibraryItems $libraryItems)
    {
        $item = LibraryItems::findOrFail($request->$id);
        $item->docTitle = $request->docTitle;
        $item->docImage = $request->docImage;
        $item->docAuthor = $request->docAuthor;
        $item->docDescription = $request->docDescription;
        $item->docFile = $request->docFile;

        $item->save();
        return $item;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LibraryItems  $libraryItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(LibraryItems $libraryItems)
    {
        $item = LibraryItems::destroy($id);
        return $item;
    }
}
