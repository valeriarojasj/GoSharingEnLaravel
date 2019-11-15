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
//revisado
Route::get('/home', function () {
  $title='Home';
    return view('home',compact('title'));
});
//revisado
Route::get('/main', 'PostController@showAllPosts');
//revisado
Route::get('/profile', function () {
  $title='profile';
    return view('profile',compact('title'));
});
//revisado
Route::get('/friends', function () {
  $title='friends';
    return view('friends',compact('title'));
});
//revisado
Route::get('/messages', function () {
  $title='messages';
    return view('messages',compact('title'));
});
//revisado, OJO ver css
Route::get('/donations', function () {
  $title='donations';
    return view('donations',compact('title'));
});

//revisado, OJO ver css
Route::get('/volunteering', function () {
  $title='volunteering'; //para que aparezca el titulo en el tab del header.
    return view('volunteering',compact('title'));
});

//revisado
Route::get('/about', function () {
  $title='about'; //para que aparezca el titulo en el tab del header.
    return view('about',compact('title'));
});

//revisado
Route::get('/faq', function () {
  $title='faq'; //para que aparezca el titulo en el tab del header.
    return view('faq',compact('title'));
});

//revisado
Route::get('/contact', function () {
  $title='contact'; //para que aparezca el titulo en el tab del header.
    return view('contact',compact('title'));
});
//revisado
Route::get('/register', function () {
  $title='register'; //para que aparezca el titulo en el tab del header.
    return view('register',compact('title'));
});

//revisado
Route::get('/login', function () {
  $title='login'; //para que aparezca el titulo en el tab del header.
  $email='';
  $password='';
    return view('login',compact('title','email','password'));
});
//revisado, mejorar css
Route::get('/forgotPassword',function(){
  $title='forgotPassword';
  return view('forgotPassword',compact('title'));
});


Route::post('/main','PostController@addPost');
/*Route::post('/login', function () {
  $title='login'; //para que aparezca el titulo en el tab del header.
  $email=$_POST['email'];
  $password=$_POST['password'];
    return view('login',compact('title','email','password'));
});*/
