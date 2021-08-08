<?php

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
use App\Article;


Route::get('/', function () {

    $articles = Article::orderBy('id')->get();

    return view('home');
});
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/articles/create',function(){
        return view('admin.articles.create');

    });
    Route::post('/articles/create',function(){
    
    });

}); 






Auth::routes();

