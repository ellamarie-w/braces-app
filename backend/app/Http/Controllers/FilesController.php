<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\File;

class FilesController extends Controller
{
    //
    public function upload(Request $request){
        $result = $request->file(file)->store('files');
        return ['result'->$result];
    }

    public function download(Request $request) {
        $path = storage_path(app\files);
        return response()->download($path);
    }
}
