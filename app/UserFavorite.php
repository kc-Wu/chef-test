<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    protected $fillable = ['user_id', 'target_id', 'target_type', 'favorite_type'];

    public function target() {
        return $this->morphTo();
    }

}
