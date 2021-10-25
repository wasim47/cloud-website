<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    //use SoftDeletes;
	
    protected $fillable = [
        'banner_title','banner_image','sequence',
    ];


    public function comments(){

    	return $this->hasMany(Comment::class);

    }
}
