<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    protected $dates = ['deleted_at'];

    public function getParentCategory() {
        return $this->belongsTo('App\Models\Category', 'parent_id', 'id');
    }

      public function getChildrenCategory() {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
