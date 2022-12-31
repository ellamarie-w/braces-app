<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\File;

class FilesController extends Controller
{
    //
    public function upload(Request $request){
        $result = $request->file('file')->store('files');
        return ['result'->$result];

        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('files');

        $save = new File;
        $save->name = $name;
        $save->path = $path;
        $save->save();

        return $save;
    }

    public function download(Request $request) {
        $path = storage_path('app\files\ ');
        return response()->download($path);
    }
}
