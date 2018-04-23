<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DishPicture extends Model
{
    protected $fillable = ['dish_id', 'picture', 'stamped_picture', 'source',
      'uploader', 'price', 'sold'];

    // 不带水印的图片不能直接返回给客户端，需要身份验证生成订单唯一URL给用户
    protected $hidden = ['picture'];

    public function subscription() {
        return $this->morphMany(UserOrder::class, 'product');
    }
}
