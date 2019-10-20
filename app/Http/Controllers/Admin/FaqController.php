<?php

namespace App\Http\Controllers\Admin;

use App\FAQ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class FaqController extends Controller
{
    public function index ()
    {
        $faqs_count = DB::table('f_a_q_s')
                        ->select(DB::raw("count(`id`) as `count`, `service`"))
                        ->groupBy('service')
                        ->get();
        $counts = [];
        foreach ($faqs_count as $count) {
            $counts[str_replace("App\\", '', $count->service)] = $count->count;
        }
        return view('admin.faqs.faq', compact('counts'));
    }

    public function show($faq)
    {
        $faqs = FAQ::orderBy('id', 'desc')->where('service', '=', 'App\\'.ucfirst($faq))->get();
        return view('admin.faqs.individual-faq', compact('faqs'));
    }

    public function store(Request $request)
    {
        return FAQ::create([
            'service' => $request->service,
            'question' => $request->question,
            'answer' => $request->answer,
            'created_by' => Auth::guard('admin')->user()->id,
        ]);

    }

    public function edit($id)
    {
        $faqs = FAQ::find($id);
        return response()->json($faqs);
    }

    public function update (Request $request, \App\FAQ $faq)
    {
        
        $faq->update([
            'service' => $request->service,
            'question' => $request->question,
            'answer' => $request->answer,
            'created_by' => Auth::guard('admin')->user()->id,
        ]);
        return response()->json(['message'=>'Faq update successful']);
    }

    public function active (FAQ $faq)
    {
        $faq->status = 1;
        $faq->save();
        return redirect()->back()->with('message', 'FAQ has been inactive');
    }

    public function inactive (FAQ $faq)
    {
        $faq->status = 0;
        $faq->save();
        return redirect()->back()->with('message', 'FAQ has been active');
    }

    public function delete ($id)
    {
        $delete = FAQ::find($id);
        $delete->delete();
        return redirect()->back()->with('message', 'FAQ has been Deleted');
    }
}
