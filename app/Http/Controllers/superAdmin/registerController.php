<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Requests\SuperAdmin\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\AdminRegistration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public function registerForm()
    {
        return view('frontend.superAdmin.registerForm');
    }
    public function register(RegisterRequest $request)
    {
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->user_type = $request->user_type;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route('login');
    }

    public function loginForm()
    {
        return view('frontend.superAdmin.loginForm');
    }
    public function login(LoginRequest $request)
    {

        $email = $request->email;
        $password = $request->password;
        $admin = AdminRegistration::select('id', 'name', 'email', 'password')
            ->where('email', '=', $email)
            ->where('password', '=', $password)->first();
        if ($admin) {
            session_start();
            $_SESSION['name'] = $admin->name;
            return redirect()->route('home');
        } else {
            return "Either email or password is wrong";
        }
    }
    public function logout()
    {
        session_start();
        if (isset($_SESSION['name'])) {
            session_unset();
            session_destroy();
            return redirect()->route('adminLoginForm');
        } else {
            return "not login";
        }
    }
}
