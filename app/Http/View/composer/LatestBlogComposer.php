<?php


namespace App\Http\View\Composer;


use App\Analysis;
use App\Blog;
use Illuminate\View\View;

class LatestBlogComposer
{
    public function compose(View $view)
    {
        $view->with('blogs', Blog::select(['blogs.title', 'blogs.slug',
            'blogs.body', 'blogs.feature_image'
        ])
            ->whereStatus(3)
            ->withCount('comments')
            ->withCount('likes'));
    }
}
