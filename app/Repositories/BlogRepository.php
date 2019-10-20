<?php

namespace App\Repositories;

use App\Blog;
use Illuminate\Support\Str;
use Auth;
use App\Repositories\BaseRepository;

class BlogRepository implements ContentRepositoryInterface
{

    use BaseRepository;

    protected $model;

    /**
     * Constructor.
     *
     * @param Project $project
     */
    public function __construct(Blog $blog)
    {
        $this->model = $blog;
    }

    public function store($input)
    {
        $data['title'] = $input['title'];
        $data['body'] = $input['body'];
        $data['category_id'] = ($input['subcategory'] && intval($input['subcategory']) !== 0) ? $input['subcategory'] : $input['category'];
        $data['slug'] = Str::slug($input['title']);
        $data['created_by'] = Auth::guard('admin')->user()->id;

        return $this->save($this->model, $data);
    }
}