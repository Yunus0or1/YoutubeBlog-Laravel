<?php



Route::get('/', function () {
    return view('homepage');
});

Route::get('after/{subject}','PageController@articlesANDvideos');

Route::get('after/{sub}/{title}/{writer}','PageController@details');


Route::get('/blog','PageController@blog');

Route::post('/blog1', ['as'=>'gpa.science', 'uses' => 'PageController@blogafter']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('profile/{email}/{username}','PageController@profile');

Route::get('profilewriting/{title}','PageController@profilewriting');

Route::get('/profileofwriters','PageController@profileofwriters');

Route::get('/profileofwriters/{email}','PageController@profileofwritersdetails');

Route::post('/download','PageController@download');














