<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public $fillable =['name', 'description', 'tags', 'sold'];

    public function pictures() {
        return $this->hasMany(DishPicture::class);
    }
}
