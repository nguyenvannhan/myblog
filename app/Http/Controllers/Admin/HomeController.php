<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $this->data['pageTitle'] = 'Home';

        return view('admin.pages.index')->with($this->data);
    }

}
