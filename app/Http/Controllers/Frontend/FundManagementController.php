<?php

namespace App\Http\Controllers\Frontend;

use App\FAQ;
use App\Package;
use Illuminate\Http\Request;

class FundManagementController extends FrontendController
{
    public function index()
    {
        $fundManagementPackages = Package::whereService('App/FundManagement')->whereStatus(1)->orderBy('orders', 'ASC')->get();

        $fundmanagement_faqs = FAQ::where('service', 'App\FundManagement')->get();

        return view('frontend.fund-management', compact('fundManagementPackages', 'fundmanagement_faqs'));
    }
}
