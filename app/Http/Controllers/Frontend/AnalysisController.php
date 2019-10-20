<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Http\Controllers\Controller;
use App\Analysis;

class AnalysisController extends FrontendController
{
    public function index()
    {
        Meta::prependTitle('Forex Analysis');

        $analyses = Analysis::select([
                                    'analyses.category_id',
                                    'analyses.title',
                                    'analyses.slug',
                                    'analyses.body',
                                    'analyses.feature_image',
                                    'admins.first_name',
                                    'admins.last_name',
                                    'analyses.created_at'])
                                    ->Join('admins', 'admins.id', 'analyses.created_by')
                                    ->whereStatus(3)
                                    ->with('category')
                                    ->withCount('comments')
                                    ->withCount('likes')
                                    ->paginate(6);


        return view('frontend.analysis', compact('analyses'));
    }
    public function show(Analysis $slug)
    {
        return view('frontend.analysis-details', compact('slug'));
    }

    public function like(Request $request, Analysis $slug)
    {

    }

    public function dislike(Request $request, Analysis $slug)
    {

    }
    public function rating(Request $request, Analysis $slug)
    {

    }
    public function commentStore(Request $request, Analysis $slug)
    {

    }
    public function commentUpdate(Request $request, Analysis $slug)
    {

    }
    public function commentDestroy(Request $request, Analysis $slug)
    {

    }
}
