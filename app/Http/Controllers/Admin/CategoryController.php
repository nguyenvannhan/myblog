<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\APIController;
use HTML;

class CategoryController extends Controller
{
    public function index() {
        $this->data['scripts'] = 
        HTML::script('_admin/js/category.js');

         $this->data['pageTitle'] = 'Category Management';

        return view('admin.pages.category.index')->with($this->data);
    }

    public function getViewModal($id = 0) {
        $apiController = new APIController;

        $categoryItem = $apiController->getCategoryItemFromID(1);

        $view = view('admin.pages.category.modal-add')->with(['categoryItem']);

        return $view;
    }
}
