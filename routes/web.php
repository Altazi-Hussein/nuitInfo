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
    return view('welcome');
});

Auth::routes();

Route::get('article/{id}/upvote', 'ArticleController@upvote');

Route::get('article/{id}/downvote', 'ArticleController@downvote');

Route::resource('article/', 'ArticleController');

Route::resource('article/', 'ArticleController')->except([
    'show',
]);
Route::get('article/{id}', 'ArticleController@show');

/* Route::resource('user/', 'UserController')->except(['show', 'index', 'destroy']);
 */
Route::post('commentaire/', 'CommentaireController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/', 'UserController@edit');
Route::post('user/','UserController@update');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');