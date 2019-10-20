<?php

namespace App\Repositories;

use App\Analysis;
use Illuminate\Support\Str;
use Auth;
use App\Repositories\BaseRepository;

class AnalysisRepository implements ContentRepositoryInterface
{

    use BaseRepository;

    protected $model;

    /**
     * Constructor.
     *
     * @param Project $project
     */
    public function __construct(Analysis $analysis)
    {
        $this->model = $analysis;
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