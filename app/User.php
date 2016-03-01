<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use TiagoMarciano\Acl\Contracts\UserAcl;

class User extends Authenticatable implements UserAcl
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRole():string
    {
        return "supervisor";
    }

    public function getId():int
    {
        return $this->id;
    }
}
