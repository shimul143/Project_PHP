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
    return view('dashboard');
});
Route::get('/Admin', function () {
    return view('Admin.dashboard');
});
Route::get('/about', function () {
    return view('about.about');
});
Route::get('/hobbies', function () {
    return view('hobbies.hobbies');
});
Route::get('/skills', function () {
    return view('skills.skills');
});
Route::get('/hobbies/addnew', function () {
    return view('hobbies.addnew');
});
Route::get('/skills/addnew', function () {
    return view('skills.addnew');
});
Route::get('/facts', function () {
    return view('facts.facts');
});
Route::get('/facts/addnew', function () {
    return view('facts.addnew');
});
Route::get('/education', function () {
    return view('education.education');
});
Route::get('/education/addnew', function () {
    return view('education.addnew');
});
Route::get('/settings', function () {
    return view('settings.settings');
});
Route::get('/admin/newuser', function () {
    return view('newuser.newuser');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
