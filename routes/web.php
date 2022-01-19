<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/private', function () {
    return "Private: " . Auth::user()->name;
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login',

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    });
