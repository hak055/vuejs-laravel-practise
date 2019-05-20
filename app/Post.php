<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	use Sluggable;
	
	protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable() 
    { 
    	return [ 'slug' => [ 'source' => 'caption' ] ]; 
    }
}
