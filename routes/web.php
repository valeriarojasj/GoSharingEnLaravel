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
Route::get('/profile', 'PostController@showMyPosts')->middleware('auth');
Route::get('/friends','FriendsController@showFriends')->middleware('auth');
Route::get('/findFriends','FriendsController@findFriends')->middleware('auth');
Route::get('/messages', 'MessagesController@showMessages')->middleware('auth');
Route::get('/donations', 'DonationsController@showDonations')->middleware('auth');
Route::get('/volunteering', 'VolunteeringController@showVolunteering')->middleware('auth');
Route::get('/about', 'aboutController@showAbout');
Route::get('/faq', 'FaqController@showFaq')->middleware('auth');
Route::get('/contact', 'ContactController@showContact');
Route::post('/main','PostController@addPost');
Route::post('/profile', 'PostController@addPost');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/formProfile','ProfileController@showProfileForm');
Route::post('/formProfile','ProfileController@addProfile');
Route::get('/posts/{id}/comments','CommentController@showComment');
Route::post('/posts/{id}/comments','CommentController@addComment');
Route::post('addFriend/{id}','FriendsController@addFriend');
Route::post('removeFriend/{id}','FriendsController@removeFriend');//para el view findFriends
Route::post('/acceptInvitation/{id}', 'FriendsController@acceptFriend'); //para el view Friends
Route::post('acceptFriend/{id}','FriendsController@acceptFriend');
Route::post('addLike/{idPosteo}','LikeController@addLike');
Route::post('/removeLike/{idPosteo}','LikeController@removeLike');
Route::get('/showLikes', 'LikeController@showLikes');
Route::get('/findFriends/{string}', 'FriendsController@searchFriend');
Route::post('/findFriends/{string}', 'FriendsController@searchFriend');

/*Route::post('/login', function () {
  $title='login'; //para que aparezca el titulo en el tab del header.
  $email=$_POST['email'];
  $password=$_POST['password'];
    return view('login',compact('title','email','password'));
});*/
/*Route::get('/login', function () {

  $email='';
  $password='';
    return view('login',compact('email','password'));
});
//revisado, mejorar css
Route::get('/forgotPassword',function(){

  return view('forgotPassword');
});*/
