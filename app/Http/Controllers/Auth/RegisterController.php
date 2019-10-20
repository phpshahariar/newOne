<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MemberEmailVerification;
use App\Mail\MemberVarification;
use App\User;
use App\Admin;
use App\Member;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:member');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

//    public function showAdminRegisterForm()
//    {
//        return View('auth.register', ['url' => 'admin']);
//    }

    public function showMemberRegisterForm()
    {
        return view('member.auth.register', ['url' => 'member']);
    }

    protected function createMember(Request $request)
    {
        $this->validator($request->all())->validate();
        $token = Str::random(100);
        $member = Member::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'remember_token' => $token,
        ]);
        Mail::to($member->email)->send(new MemberVarification($member, $token));
        return redirect()->intended('member/login')->with('message', 'Please Verify Your Email Address');
    }

    public function memberVerify($token)
    {
       $member = Member::where('remember_token', $token)->first();
       if ($member){
           $member->update([
               'email_verified_at' => Carbon::now(),
               'remember_token' => '',
           ]);
           Mail::to($member->email)->send(new MemberEmailVerification($member));
           return redirect('member/login')->with('message', 'Your Email is has been Verified Please Check Your Mail. You Can Login Now..');
       }

    }
}
