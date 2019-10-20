<?php

namespace App\Http\Controllers\Frontend;

use App\FAQ;
use App\Package;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;

class CopyTradeController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Copy Trade');

        $monthly_packages = Package::whereService('App/CopyTrade')->whereDuration(0)->where('status', 1)->orderBy('orders', 'ASC')->get();
         
        $annually_packages = Package::whereService('App/CopyTrade')->whereDuration(1)->where('status', 1)->orderBy('orders', 'ASC')->get();
        
        $copyTrade_faqs = FAQ::where('service', 'App\CopyTrade')->get();

        return view('frontend.copytrade', compact('monthly_packages', 'annually_packages', 'copyTrade_faqs'));
    }
}
