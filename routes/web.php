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

Route::get('/', function () {
    $articles = App\Article::all();

    foreach ($articles as $article){
        $postedBy = App\User::find($article->user_id);
	return view('index')
		->with('postedBy', $postedBy)
		->with('articles', $articles);
    }
})->name('index');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('user', 'UserController');
Route::resource('auth', 'AuthController');
Route::resource('articles', 'ArticleController');

Route::get('/logout', 'AuthController@logout');

Route::get('login/facebook', 'AuthController@redirectToProvider');
Route::get('login/facebook/callback', 'AuthController@handleProviderCallback');

/*
Route::get('/prueba', function(){
	return view('articles.create');
})->name('articles.store');
 */


