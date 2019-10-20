<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {

    }

    public function childrens(Request $request,Category $category)
    {
        return $request->expectsJson() ? $category->childrens : abort(403);
    }

}
