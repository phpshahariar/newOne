<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;

class ForexSignalReportController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Forex Signal Report');
        return view('frontend.forex-signal-report');
    }
}
