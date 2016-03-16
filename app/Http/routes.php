<?php




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/register', 'Auth\AuthController@getRegister');
    Route::post('/register', 'Auth\AuthController@postRegister');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/docs', 'PagesController@docs');
    Route::get('/logout', 'Auth\AuthController@getLogout');
    Route::get('/', 'PagesController@home');

    Route::get('/password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('/password/reset', 'Auth\PasswordController@postReset');
    Route::get('/password/email', 'Auth\PasswordController@getEmail');
    Route::post('/password/email', 'Auth\PasswordController@postEmail');

//    Route::get('/test', function(){
//        $cc1 = \CloudConvert::file(public_path('images/pic01.jpg'))
//                            ->callback('http://pagemeta.io/callback')
//                            ->convert('png');
//
//        $cc2 = \CloudConvert::newInstance();
//
//        $cc2->file(public_path('images/pic02.jpg'))
//            ->callback('http://pagemeta.io/callback2')
//            ->convert('png');
//
//        dd($cc1, $cc2);
//    });

});


Route::group(['middleware' => 'web'], function () {

});
