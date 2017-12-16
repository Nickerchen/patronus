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

Auth::routes();


Route::get('/', 'PostsController@index');


Route::get('create', 'PostsController@create');

Route::post('create', 'PostsController@store');
Route::get('/complete-registration', 'Auth\RegisterController@completeRegistration');


Route::get('/about', function() {
  return view('about');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/delete-post/{post_id}', [
    'uses' => 'PostsController@destroy' ,
    'as' => 'post.delete'
]);

Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');
