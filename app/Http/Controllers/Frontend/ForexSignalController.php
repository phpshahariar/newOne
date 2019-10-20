<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;

class ForexSignalController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Forex Signal');
        return view('frontend.forx-signal');
    }
}
