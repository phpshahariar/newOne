<?php

namespace App\Http\View\Composer;

use App\Analysis;
use Illuminate\View\View;

class LatestAnalysisComposer
{
    public function compose(View $view)
    {
        $view->with('analyses', Analysis::select(['analyses.category_id', 'analyses.title', 'analyses.slug',
                                                                'analyses.body', 'analyses.feature_image', 'analyses.created_at'
                                                             ])
                                                                ->whereStatus(3)
                                                                ->withCount('comments')
                                                                ->withCount('likes'));
    }
}
