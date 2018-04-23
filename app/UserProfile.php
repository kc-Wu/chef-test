<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id', 'real_name', 'head_picture', 'rank',
      'organization', 'position', 'province', 'city', 'tags'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
