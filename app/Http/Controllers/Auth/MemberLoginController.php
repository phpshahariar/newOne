<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class MemberLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:member')->except('logout');
    }

    public function showLoginForm()
    {
        return view('member.auth.login-member', ['url' => 'member']);
    }

    protected function guard()
    {
        return Auth::guard('member');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email|exists:members,email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/member');
        }
        return redirect()->back()->with('error', 'Email or Password is Incorrect Please try again');
    }

    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect('/')->with('messages', 'You are successfully logged out.');
    }
}
