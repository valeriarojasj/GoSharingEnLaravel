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


Route::get('/main', 'PostController@showAllPosts')->middleware('auth');
//revisado
Route::get('/profile', 'PostController@showMyPosts')->middleware('auth');
//revisado
Route::get('/friends','FriendsController@showFriends')->middleware('auth');
Route::get('/findFriends','FriendsController@findFriends')->middleware('auth');

//revisado
Route::get('/messages', 'MessagesController@showMessages')->middleware('auth');

//revisado, OJO ver css
Route::get('/donations', 'DonationsController@showDonations')->middleware('auth');

//revisado, OJO ver css
Route::get('/volunteering', 'VolunteeringController@showVolunteering')->middleware('auth');

//revisado
Route::get('/about', 'aboutController@showAbout');


//revisado
Route::get('/faq', 'FaqController@showFaq')->middleware('auth');


//revisado
Route::get('/contact', 'ContactController@showContact');

//revisado


//revisado
/*Route::get('/login', function () {

  $email='';
  $password='';
    return view('login',compact('email','password'));
});
//revisado, mejorar css
Route::get('/forgotPassword',function(){

  return view('forgotPassword');
});*/


Route::post('/main','PostController@addPost');
/*Route::post('/login', function () {
  $title='login'; //para que aparezca el titulo en el tab del header.
  $email=$_POST['email'];
  $password=$_POST['password'];
    return view('login',compact('title','email','password'));
});*/

Route::post('/profile', 'PostController@addPost');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');
Route::get('/formProfile','ProfileController@showProfileForm');
Route::post('/formProfile','ProfileController@addProfile');

Route::get('/posts/{id}/comments','CommentController@showComment');
Route::post('/posts/{id}/comments','CommentController@addComment');
