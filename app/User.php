<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function follower() {
        return $this->belongsToMany(User::class, 'friends', 'id', 'user_id');
    }

    public function following() {
        return $this->belongsToMany(User::class, 'friends', 'id', 'following');
    }

    public function moments() {
        return $this->hasMany(Moment::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function recipes() {
        return $this->hasMany(Recipe::class, 'chef_id');
    }

    public function orders() {
        return $this->hasMany(UserOrder::class, 'buyer_id');
    }

    public function profile() {
        return $this->hasOne(UserProfile::class);
    }

    public function favorites() {
        return $this->hasMany(UserFavorite::class);
    }
}
