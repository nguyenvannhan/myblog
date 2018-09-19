<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class AccountController extends Controller {
    
    public function getLogin() {
        $this->data['pageTitle'] = 'Login';
        
        return view('auth.login')->with($this->data);
    }

    public function getRegister() {
        $this->data['pageTitle'] = 'Register';

        $this->data['roleList'] = Role::all();

        return view('auth.register')->with($this->data);
    }

    public function test() {
        return "123";
    }

    public function test2() {
        return "234";
    }
}
