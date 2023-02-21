<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        $admin_id = $request->input('admin_id');
        $admin_pw = $request->input('admin_pw');

        $result = Auth::attempt(['name' => $admin_id, 'password' => $admin_pw]);

        if($result) {
            $request->session()->put('mgmt-login', true);
            return redirect()->intended('/');
        } else {
            return redirect()->back();
        }
    }
}
