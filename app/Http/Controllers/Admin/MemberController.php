<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:member');
    }

    public function index()
    {
        return view("member.index");
    }
}
