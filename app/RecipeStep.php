<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeStep extends Model
{
    protected $fillable = ['recipe_id', 'step', 'instruction', 'step_pictures',
      'pre_pub_version'];

    public function recipe() {
        return $this->belongsTo(Recipe::class);
    }
}
