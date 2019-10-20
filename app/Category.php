<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function childrens() 
     {
        return $this->hasMany(self::class, 'parent_id');
     }

     public function parent() 
     {
        return $this->belongsTo(self::class, 'id');
     }

    public function analysis()
    {
        return $this->hasMany(Analysis::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
