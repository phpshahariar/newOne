<?php

namespace App;

use App\Traits\Acted;
use App\Traits\Interaction;
use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Observers\AnalysisObserver;

class Analysis extends Model
{
    use SoftDeletes, Interaction, Acted, Taggable;

    protected $table = 'analyses';

    protected static $status = [
        'inactive', 'active', 'editing', 'publish'
    ];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        Analysis::observe(AnalysisObserver::class);
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    public function getStatusAttribute($value)
    {
        if (array_key_exists($value, self::$status)) {
            return self::$status[$value];
        }
    }

    public function getRouteKeyName()
    {
        return (int)request()->route('analysis') === 0 ? 'slug' : 'id';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
