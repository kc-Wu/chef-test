<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['user_id', 'whats_up', 'media', 'moment_type',
      'state'];
}
