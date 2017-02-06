<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
//use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'gender', 'phone', 'email', 'password', 'address', 'status'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
