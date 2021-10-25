<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    
    protected $fillable = [
        'title','action_link','full_desc','note','image','points','rewards_amount','date','allowed_country','category',
    ];
}
