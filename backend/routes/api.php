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

Route::get('/blogpost',[BlogPostController::class,'index']);
Route::post('/blogpost',[BlogPostController::class,'store']);
Route::put('/blogpost/{id}',[BlogPostController::class,'update']);
Route::delete('/blogpost/{id}',[BlogPostController::class,'destroy']);

//COMMENTS

Route::get('/blogComment',[BlogCommentController::class,'index']);
Route::post('/blogComment',[BlogCommentController::class,'store']);
Route::put('/blogComment/{id}',[BlogCommentController::class,'update']);
Route::delete('/blogComment/{id}',[BlogCommentController::class,'destroy']);

/*
|------------
| Community
|------------
*/

Route::get('/communityPost',[CommunityPostController::class,'index']);
Route::post('/communityPost',[CommunityPostController::class,'store']);
Route::put('/communityPost/{id}',[CommunityPostController::class,'update']);
Route::delete('/communityPost/{id}',[CommunityPostController::class,'destroy']);

//COMMENTS

Route::get('/communityComment',[PostCommentController::class,'index']);
Route::post('/communityComment',[PostCommentController::class,'store']);
Route::put('/communityComment/{id}',[PostCommentController::class,'update']);
Route::delete('/communityComment/{id}',[PostCommentController::class,'destroy']);

/*
|------------
| Resources
|------------
*/

Route::get('/resourcesLink',[ResourceLinkController::class,'index']);
Route::post('/resourcesLink',[ResourceLinkController::class,'store']);
Route::put('/resourcesLink/{id}',[ResourceLinkController::class,'update']);
Route::delete('/resourcesLink/{id}',[ResourceLinkController::class,'destroy']);
