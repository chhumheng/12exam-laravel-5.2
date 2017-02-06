<?php

namespace App;

//use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'display_name',
        'description',
        'created_at',
        'updated_at'
    ];

}
