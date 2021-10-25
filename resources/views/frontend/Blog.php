<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $fillable = [
        'title','short_desc','full_desc','postBy','image',
    ];


    public function comments(){

    	return $this->hasMany(Comment::class);

    }
}
