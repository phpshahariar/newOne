<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'service', 'duration', 'price', 'details', 'created_by', 'orders', 'icon',
    ];


    protected static $duration = [
        'monthly', 'yearly'
    ];

    protected $casts = [
        'details' => 'array',
    ];

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    public function getDurationAttribute($value)
    {
        // if ($value) {
            if (array_key_exists($value, self::$duration)) {
                return self::$duration[$value];
            }
        // }
        // return self::$duration[0];
        
    }

    public function setDurationAttribute($value)
    {
        $this->attributes['duration'] = array_search($value, self::$duration);
    }
}


    

