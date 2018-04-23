<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    public $fillable = ['name', 'description', 'parent_id'];

    public function children() {
        return $this->hasMany(Taxonomy::class, 'parent_id');
    }

    /**
     * 查询树形字典
     *
     * @param $root int 根节点 id
     * @param bool $includeSelf, 返回结果是否包含根节点
     */
    public function tree($root, $includeSelf=true) {
        // TODO implement this
    }
}
