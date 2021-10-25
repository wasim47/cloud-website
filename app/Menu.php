<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['menuname', 'sequence', 'menu_type','menu_url','status'];
}
