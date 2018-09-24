<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

     protected $table = 'categories';

    protected $dates = ['deleted_at'];

    public function Categories() {
        return $this->belongsToMany('App\Models\Post')->using('App\Models\Post_Category');
    }
}
