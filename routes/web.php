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

use App\Model\Encontrista;

Route::name('home')
    ->get('/', function () {
        return view('welcome');
    });


Route::get('/home', 'HomeController@index');


/**
 * Authentication group
 */
Route::group([], function () {
    // Authentication Routes...
    Route::name('login')
        ->get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::name('logout')
        ->get('logout', 'Auth\LoginController@logout');

    // Registration Routes...
    Route::name('register')
        ->get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});

Route::get("/group", function () {
    return view('group');
});

Route::name('profile')
    ->get("/profile/{user?}", function ($user = null) {
        $user = is_null($user) ? Auth::user() : Encontrista::find($user);
        return view('pages.profile.index', ['profile' => $user]);
    });
Route::name('curriculum')
    ->get("/curriculum/{user?}", function ($user = null) {
        $user = is_null($user) ? Auth::user() : Encontrista::find($user);
        return view('pages.curriculum.index', ['profile' => $user]);
    });


Route::name('calendar')
    ->get("/calendar/{user?}", function ($user = null) {
        $user = is_null($user) ? Auth::user() : Encontrista::find($user);

        return view('pages.calendar.index', $user);
    });Route::name('groups')
    ->get("/groups/{user?}", function ($user = null) {
        $user = is_null($user) ? Auth::user() : Encontrista::find($user);

        return view('pages.groups.index', $user);
    });