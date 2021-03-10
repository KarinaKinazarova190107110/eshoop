<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;


use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('post/create', function() {
   DB::table('post')->insert([
   
    'title' =>'lab',
    'body' =>'Document',
   
   ]);

});

Route::get('post', function(){
    $post = Post::find(1);
    return $post;
});



Route::get('blog',[BlogController::class,'index']);


Route::get('post/{id}',[BlogController::class,'get_post']);

