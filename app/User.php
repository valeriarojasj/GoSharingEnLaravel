<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
      return $this->hasOne('App\Profile');
    }

    public function posts()
    {
      return $this->hasMany('App\Post');
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function friendsOfThisUser()
{
  return $this->belongsToMany('App\User', 'friendships', 'user_id', 'friend_id')
  ->withPivot('status')
  ->wherePivot('status','confirmed');


}

// friendship that this user was asked for
public function thisUserFriendOf()
{
  return $this->belongsToMany('App\User', 'friendships', 'friend_id', 'user_id')
  ->withPivot('status')
  ->wherePivot('status','confirmed');
}

public function requestsOfThisUser()
{
return $this->belongsToMany('App\User', 'friendships', 'user_id', 'friend_id')
->withPivot('status')
->wherePivot('status','pending');


}

public function invitationsOfThisUser()
{
return $this->belongsToMany('App\User', 'friendships', 'friend_id', 'user_id')
->withPivot('status')
->wherePivot('status','pending');


}



public function allFriends()
	{
		return $this->friendsOfThisUser->merge($this->thisUserFriendOf);
	}

}
