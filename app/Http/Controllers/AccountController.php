<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class AccountController extends Controller {
    
    public function getLogin() {
        $this->data['pageTitle'] = 'Login';
        
        return view('auth.login')->with($this->data);
    }

    public function postLogin(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            if(Auth::user()->role_id==1){
                return redirect('admin');
            }
        }
        else{
            return back()->with(['error' => 'Sai Email hoặc mật khẩu']);
        }

  
    }

    public function getRegister() {
        $this->data['pageTitle'] = 'Register';

        $this->data['roleList'] = Role::all();

        return view('auth.register')->with($this->data);
    }
}
