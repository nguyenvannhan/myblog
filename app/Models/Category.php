<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    protected $dates = ['deleted_at'];

    public static function getAll($order = 'asc') {
        $order = strtoupper($order);

        if($order != 'ASC' && $order != 'DESC') {
            $order = 'ASC';
        }

        return self::whereNotNull('updated_at')->orderBy('id', $order)->get();
    }

    public function getParentCategory() {
        return $this->belongsTo('App\Models\Category', 'parent_id', 'id');
    }

      public function getChildrenCategory() {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
