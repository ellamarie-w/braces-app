<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryItemsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CommunityPostController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\ResourceLinkController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
|
| - - - - 
| Users authentication
| - - - -
|
|
*/
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/logout',[AuthController::class,'logout']);

});


/*
|------------
| library
|------------
*/

Route::get('/library',[LibraryItemsController::class,'index']);
Route::post('/library',[LibraryItemsController::class,'store']);
Route::put('/library/{id}',[LibraryItemsController::class,'update']);
Route::delete('/library/{id}',[LibraryItemsController::class,'destroy']);

/*
|------------
| News
|------------
*/

Route::get('/',[Controller::class,'index']);
Route::post('/',[Controller::class,'store']);
Route::put('//{id}',[Controller::class,'update']);
Route::delete('//{id}',[Controller::class,'destroy']);

//COMMENTS

Route::get('/',[Controller::class,'index']);
Route::post('/',[Controller::class,'store']);
Route::put('//{id}',[Controller::class,'update']);
Route::delete('//{id}',[Controller::class,'destroy']);

/*
|------------
| Community
|------------
*/

Route::get('/',[Controller::class,'index']);
Route::post('/',[Controller::class,'store']);
Route::put('//{id}',[Controller::class,'update']);
Route::delete('//{id}',[Controller::class,'destroy']);

//COMMENTS

Route::get('/',[Controller::class,'index']);
Route::post('/',[Controller::class,'store']);
Route::put('//{id}',[Controller::class,'update']);
Route::delete('//{id}',[Controller::class,'destroy']);

/*
|------------
| Resources
|------------
*/

Route::get('/',[Controller::class,'index']);
Route::post('/',[Controller::class,'store']);
Route::put('//{id}',[Controller::class,'update']);
Route::delete('//{id}',[Controller::class,'destroy']);
