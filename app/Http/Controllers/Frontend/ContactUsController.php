<?php

namespace App\Http\Controllers\Frontend;

use App\CustomerEmail;
use App\Mail\CustomerContactEmail;
use App\Mail\MemberVarification;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends FrontendController
{

    public function index()
    {
        Meta::prependTitle('Contact Us');
        return view('frontend.contact-us');
    }

    public function customerContactMail(Request $request)
    {
//        $customerEmail = new CustomerEmail();
//        $customerEmail->department   = $request->department;
//        $customerEmail->priority     = $request->priority;
//        $customerEmail->first_name   = $request->first_name;
//        $customerEmail->email        = $request->email;
//        $customerEmail->phone        = $request->phone;
//        $customerEmail->address      = $request->address;
//        $customerEmail->city         = $request->city;
//        $customerEmail->message      = $request->message;
//        $customerEmail->answer       = $request->answer;
//        dd(env('APP_NAME'));

        Mail::to('shahariar.ikbal86@gmail.com')->send(new CustomerContactEmail($request->all()));
        return redirect()->back()->with('message', 'Email Send');
    }


}
