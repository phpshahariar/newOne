<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{

    protected $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $blogs = Blog::with('category')->orderBy('id', 'desc')->get();
        $categories = Category::whereParentId(NULL)->whereService(Blog::class)->get();

        return view('admin.blogs.list', compact('blogs', 'categories'));
    }


    public function store(Request $request)
    {
        
        // image store operation
        $image = NULL;
        
        // database operation
        $data = $request->only([
            'title',
            'body',
            'category',
            'subcategory',
            'feature_image'
        ]);

        $blog = $this->repository->store($data);

        return redirect()->back()->with('message', 'Blog Create Successfully');
    }

    public function active(Blog $blog)
    {
        $blog->status = 1;
        $blog->save();
        return redirect()->back()->with('message', 'Blog Active');
    }

    public function inactive(Blog $blog)
    {
        $blog->status = 0;
        $blog->save();
        return redirect()->back()->with('message', 'Blog Inactive');
    }

    public function publish(Blog $blog)
    {
        $blog->status = 3;
        $blog->save();
        return redirect()->back()->with('message', 'Blog has been Publishe');
    }

    public function edit(Request $get)
    {
        $id = $get->id;
        $edit_blog = Blog::where('id', $id)->with(['category', 'category.childrens', 'category.parent'])->first();
        return $edit_blog;
    }

    public function update(Request $request)
    {
        $update_blog = Blog::where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            
        ]);

        if($update_blog){
            return response()->json("Success");
        }else {
            return response()->json("Error");
        }
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('message', 'Blog has been Deleted');
    }
}
