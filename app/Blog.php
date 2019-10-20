<?php

namespace App;

use App\Traits\Acted;
use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Interaction;
use App\Observers\BlogObserver;

class Blog extends Model
{
    use SoftDeletes, Interaction, Acted, Taggable;

    protected static $status = [
        'inactive', 'active', 'editing', 'publish'
    ];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        Blog::observe(BlogObserver::class);
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
        return (int)request()->route('blog') === 0 ? 'slug' : 'id';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function adminCreated()
    {
        return $this->belongsTo(Admin::class, 'created_by', 'id');
    }
}
