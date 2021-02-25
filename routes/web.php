<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\Post;
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

Route::get('post/add', function() {
   DB::table('post')->insert([
    'id' => 190107110,
    'title' =>'lab',
    'body' =>'Document',
    'added_on' =>'2005-10-30 10:45'
   ]);
});

