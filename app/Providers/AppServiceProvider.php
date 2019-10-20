<?php

namespace App\Providers;

use App\Analysis;
use App\Http\View\Composer\LatestAnalysisComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            return base_path('public_html');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer('partial.analysis.*', function ($view) {
//            $view->with('analyses', Analysis::select([
//                                                    'analyses.category_id',
//                                                    'analyses.title',
//                                                    'analyses.slug',
//                                                    'analyses.body',
//                                                    'analyses.feature_image',
//                                                    'analyses.created_at'
//                                                ])
//                                                    ->whereStatus(3)
//                                                    ->withCount('comments')
//                                                    ->withCount('likes')
//                        );
//        });
    }
}
