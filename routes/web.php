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
//revisado
Route::get('/home', function () {

    return view('home');
});
//revisado
Route::get('/main', 'PostController@showAllPosts');
//revisado
Route::get('/profile', 'PostController@showMyPosts');
//revisado
Route::get('/friends', function () {

    return view('friends');
});
//revisado
Route::get('/messages', function () {

    return view('messages');
});
//revisado, OJO ver css
Route::get('/donations', function () {

    return view('donations');
});

//revisado, OJO ver css
Route::get('/volunteering', function () {

    return view('volunteering');
});

//revisado
Route::get('/about', function () {

    return view('about');
});

//revisado
Route::get('/faq', function () {

    return view('faq');
});

//revisado
Route::get('/contact', function () {

    return view('contact');
});
//revisado


//revisado
Route::get('/login', function () {

  $email='';
  $password='';
    return view('login',compact('email','password'));
});
//revisado, mejorar css
Route::get('/forgotPassword',function(){

  return view('forgotPassword');
});


Route::post('/main','PostController@addPost');
/*Route::post('/login', function () {
  $title='login'; //para que aparezca el titulo en el tab del header.
  $email=$_POST['email'];
  $password=$_POST['password'];
    return view('login',compact('title','email','password'));
});*/

Route::post('/profile', 'PostController@addPost');


Route::get('/home', 'HomeController@index')->name('home');
