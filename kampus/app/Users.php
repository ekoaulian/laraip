<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Users extends \Eloquent implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'name', 'email', 'password', 'level', 'remember_token', 'created_at', 'updated_at'
    ];
}
