<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Blogs');
        $blogs = Blog::select([
                                'blogs.category_id',
                                'blogs.title',
                                'blogs.slug',
                                'blogs.body',
                                'blogs.feature_image',
                                'admins.first_name',
                                'admins.last_name',
                                'blogs.created_at'])
                                ->Join('admins', 'admins.id', 'blogs.created_by')
                                ->with('createBy')
                                ->with('category')
                                ->withCount('comments')
                                ->withCount('likes')
                                ->whereStatus(3)
                                ->paginate(6);


        return view('frontend.blog', compact('blogs'));
    }
    public function show(Blog $slug)
    {
        return view('frontend.blog-details', compact('slug'));
    }

    public function like(Request $request, Blog $slug)
    {

    }

    public function dislike(Request $request, Blog $slug)
    {

    }
    public function rating(Request $request, Blog $slug)
    {

    }
    public function commentStore(Request $request, Blog $slug)
    {

    }
    public function commentUpdate(Request $request, Blog $slug)
    {

    }
    public function commentDestroy(Request $request, Blog $slug)
    {

    }
}
