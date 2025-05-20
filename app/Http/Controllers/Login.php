<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Login extends Controller
{
    use ValidatesRequests;

    public $email;
    public $password;
    public $remember = false;

    public function login(Request $request)
    {
        $credentials = $request->validate([ 
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        $this->addError('email', __('auth.failed'));
    }


    public function __invoke()
    {
        return view('login');
    }
}
