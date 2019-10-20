<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FAQ extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service', 'question', 'answer', 'created_by',
    ];

    protected static $status = [
        'inactive', 'active'
    ];

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
}
