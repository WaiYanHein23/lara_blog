<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SubscripitonController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::middleware(AuthMiddleware::class)->group(function(){
    Route::get('/', [BlogController::class,'index']);
    Route::get('/blogs/{blog:slug}',[BlogController::class,'show'])->name('#blogshow');
    Route::post('/blogs/{blog:slug}',[CommentController::class,'store']);
    Route::post('/blogs/{blog:slug}/handle-subscriptions',[SubscripitonController::class,'toggle']);
    Route::post('/logout',[LogoutController::class,'destroy']);
    Route::delete('/comments/{comment}',[CommentController::class,'destroy']);
    Route::get('/comments/{comment}/edit',[CommentController::class,'edit']);
    Route::patch('/comments/{comment}/update',[CommentController::class,'update']);
});
Route::middleware(GuestMiddleware::class)->group(function(){

    Route::get('/register',[AuthController::class,'create']);
Route::post('/register',[AuthController::class,'store']);
Route::get('/login',[LoginController::class,'create']);
Route::post('/login',[LoginController::class,'store']);
});

//   Route::get('/categories/{category:slug}', function (Category $category) {
//    return view('blogs.index',[
//     'blogs'=>$category->blogs()->with('category','user')->paginate(5)
//    ]);
// });

// Route::get('/users/{user:username}', function (User $user) {
//    return view('blogs.index',[
//     'blogs'=>$user->blogs()->with('category','user')->paginate(5)
//    ]);
// });

