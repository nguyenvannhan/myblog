<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\APIController;
use Illuminate\Support\Facades\Auth;
use HTML;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $this->data['scripts'] = 
        HTML::script('_admin/js/category.js');
        
        $this->data['pageTitle'] = 'Category Management';
        $this->data['categoryList'] = Category::with('getParentCategory')->get();
        
        return view('admin.pages.category.index')->with($this->data);
    }
    
    public function getViewModal($id = 0) {
        $categoryItem = Category::find($id);
        
        if(is_null($categoryItem)) {
            $categoryItem = Category::orderBy('id', 'desc')->first();
            
            if(!is_null($categoryItem->updated_at)) {
                $categoryItem = new Category;
                $categoryItem->name = '';
                $categoryItem->parent_id = 0;
                $categoryItem->timestamps = false;
                $categoryItem->created_at = date('Y-m-d H:i:s');
                $categoryItem->updated_at = NULL;
                $categoryItem->save();
            }
        }
        
        $categoryList = Category::getAll();
        
        $this->data['categoryItem'] = $categoryItem;
        $this->data['categoryList'] = $categoryList;
        
        $view = view('admin.pages.category.modal-add')->with($this->data)->render();
        
        return response()->json(['view' => $view]);
    }

    public function postUpdate(Request $request) {
        $categoryItem = Category::find($request->id);

        if(is_null($categoryItem->updated_at)) {
            $error = 'Create new category successfully';
        } else {
            $error = 'Update category successfully';
        }

        $categoryItem->name = $request->name;
        $categoryItem->parent_id = $request->parent_id;
        $categoryItem->save();

        return redirect()->route('get_index_category_admin_route')->with('d_action', ['result' => 1, 'error' => $error]);
    }

    public function postDelete(Request $request) {
        $categoryItem = Category::find($request->id);

        $result = $categoryItem->deleteCompletely();

        return redirect()->route('get_index_category_admin_route')->with('d_action', $result);
    }
}
