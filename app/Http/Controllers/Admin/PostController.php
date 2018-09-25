<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use HTML;

use App\Models\Category;

class PostController extends Controller
{
    public function index() {

    }

    public function getAdd() {
        $this->data['pageTitle'] = 'Add New Post';

        $this->data['stylesheets'] = 
        HTML::style('vendors/md-editor/mdeditor.css');

        $this->data['scripts'] =
        HTML::script('vendors/md-editor/mdeditor.min.js');

        $categoryList = Category::getAll();

        $this->data['categoryList'] = $categoryList;

        return view('admin.pages.post.add')->with($this->data);
    }

    public function postAdd(Request $request) {
        return $request->all();
    }
}
