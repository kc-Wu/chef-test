<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeRate extends Model
{
    protected $fillable = ['recipe_id', 'user_id', 'rate', 'description'];

    public function recipe() {
        return $this->belongsTo(Recipe::class);
    }
}
