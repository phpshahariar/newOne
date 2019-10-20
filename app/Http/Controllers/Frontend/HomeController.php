<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;

class HomeController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Home');
        return view('frontend.home.index');
    }
}
