<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $fillable = ['buyer_id', 'product_id', 'product_type',
      'order_no', 'state'];

    public function product() {
        return $this->morphTo();
    }
}
