<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['recipe_no', 'name', 'description', 'chef_id',
      'source', 'tags', 'poster', 'video', 'price', 'latest_editor',
      'pre_pub_version', ];


    public function ingredients() {
        return$this->hasMany(RecipeIngredient::class);
    }

    public function steps() {
        return $this->hasMany(RecipeStep::class);
    }

    public function rates () {
        return $this->hasMany(RecipeRate::class);
    }

    public function comments() {
        return $this->morphMany(Comment::class, 'target');
    }
    public function previousVersion() {
        return $this->hasOne(RecipeVersion::class, 'id', 'pre_pub_version');
    }

    public function history() {
        return $this->hasMany(RecipeVersion::class, 'recipe_no');
    }

    public function subscription() {
        return $this->morphMany(UserOrder::class, 'product');
    }
}
