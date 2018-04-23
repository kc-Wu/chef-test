<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'source', 'media_type',
      'category', 'views', 'share_times', 'tag', 'state'];

    public function comments() {
        return $this->morphMany(Comment::class, 'target');
    }
}
