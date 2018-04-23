<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['target_id', 'target_type', 'comment', 'pictures',
      'user_id', 'reply_to', 'state', ];

    public function target() {
        return $this->morphTo();
    }
}
