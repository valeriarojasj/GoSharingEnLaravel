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

Route::get('/home', function () {
  $title='Home';
    return view('home',compact('title'));
});
Route::get('/main', function () {
  $title='main';
    return view('main',compact('title'));
});
Route::get('/profile', function () {
  $title='profile';
    return view('profile',compact('title'));
});
Route::get('/friends', function () {
  $title='friends';
    return view('friends',compact('title'));
});
Route::get('/messages', function () {
  $title='messages';
    return view('messages',compact('title'));
});
Route::get('/donations', function () {
  $title='donations';
    return view('donations',compact('title'));
});
Route::get('/volunteering', function () {
  $title='volunteering';
    return view('volunteering',compact('title'));
});
Route::get('/about', function () {
  $title='about';
    return view('about',compact('title'));
});
Route::get('/faq', function () {
  $title='faq';
    return view('faq',compact('title'));
});
Route::get('/contact', function () {
  $title='contact';
    return view('contact',compact('title'));
});
Route::get('/register', function () {
  $title='register';
    return view('register',compact('title'));
});
Route::get('/login', function () {
  $title='login';
  $email='';
  $password='';
    return view('login',compact('title','email','password'));
});

Route::post('/login', function () {
  $title='login';
  $email=$_POST['email'];
  $password=$_POST['password'];
    return view('login',compact('title','email','password'));
});
