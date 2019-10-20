<?php

namespace App\Http\Controllers\Admin;

use App\Analysis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Repositories\AnalysisRepository;

class AnalysisController extends Controller
{
    protected $repository;

    public function __construct(AnalysisRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $analyses = Analysis::with('category')->orderBy('id', 'desc')->get();
        $categories = Category::whereParentId(NULL)->whereService(Analysis::class)->get();

        return view('admin.analyses.list', compact('analyses', 'categories'));
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

        $analysis = $this->repository->store($data);

        return redirect()->back()->with('message', 'Analysis Create Successfully');
    }


    public function active(Analysis $analysis)
    {
        $analysis->status = 1;
        $analysis->save();
        return redirect()->back()->with('message', 'Analysis Active');
    }

    public function inactive(Analysis $analysis)
    {
        $analysis->status = 0;
        $analysis->save();
        return redirect()->back()->with('message', 'Analysis Inactive');
    }

    public function edit(Request $get)
    {
        $id = $get->id;
        $edit_analysis = Analysis::where('id', $id)->with(['category', 'category.childrens', 'category.parent'])->first();
        return $edit_analysis;
    }

    public function update(Request $request)
    {
        $update_analysis = Analysis::where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            
        ]);

        if($update_analysis){
            return response()->json("Success");
        }else {
            return response()->json("Error");
        }

    }

    
    public function publish(Analysis $analysis)
    {
        $analysis->status = 3;
        $analysis->save();
        return redirect()->back()->with('message', 'Analysis has been Publishe');
    }

    public function delete(Analysis $analysis)
    {
        $analysis->delete();
        return redirect()->back()->with('message', 'Analysis has been Deleted');
    }
}
