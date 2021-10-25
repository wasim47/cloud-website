<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function blog(){

    	$this->belongsTo(Blog::class);

    }
}
