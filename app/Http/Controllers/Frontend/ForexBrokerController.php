<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;

class ForexBrokerController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Forex Broker');
        return view('frontend.forex-broker');
    }
}
