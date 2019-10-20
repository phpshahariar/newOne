<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;
use App\Package;

class ForexSignalPackageController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Forex Signal Packages');
        $forexSignalPackage = Package::whereService('App/ForexSignalPackage')->where('status', 1)->orderBy('orders', 'ASC')->get();
        return view('frontend.forex-signal-package', compact('forexSignalPackage'));
    }
}
