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

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{article}', 'ArticlesController@show');

//Route::get('/articles', function () {
////    $articles = DB::table('articles')->get();
// //   $articles = App\Article::active();
//    $articles = App\Article::all();
//    return view ('articles.index', compact('articles'));
//});
//
//Route::get('/articles/{article}', function ($id) {
// //   $article = DB::table('articles')->find($id);
//      $article = App\Article::find($id);
//    return view ('articles.show', compact('article'));
//});

//      $article = App\Article::find($id);
//    return view ('articles.show', compact('article'));

//      $article = App\Article::find($id);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
