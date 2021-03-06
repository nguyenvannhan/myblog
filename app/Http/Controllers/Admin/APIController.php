<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;

class APIController extends Controller
{
    // Category API
    public function getCategoryItemFromID($id) {
        $categoryItem = Category::with('getParentCategory')->find($id);

        return response()->json(['categoryItem' => $categoryItem]);
    }
}
