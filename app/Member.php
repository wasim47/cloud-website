<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   
    protected $fillable = [
        'fname','lname','company','messenger','messenger_id', 'phone','country', 'city', 'address1','address2', 'state', 'zipcode','dob','gender','email', 'password',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
