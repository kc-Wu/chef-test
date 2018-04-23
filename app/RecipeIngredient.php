<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    protected $fillable = ['recipe_id', 'name', 'ingredient_type', 'amount',
      'display_order', 'pre_pub_version'];

    public function recipe() {
        return $this->belongsTo(Recipe::class);
    }
}
