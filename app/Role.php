<?php

namespace App;

use Zizaco\Entrust\EntrustRole;


class Role extends EntrustRole
{
    protected $table = 'roles';

    /*
     * Establish many to many relationship with users
     */
    public function users()
    {
        return $this->belongsToMany('App\User','user_accounts','role_id','user_id');
    }

    /*
     * Establish many to many relationship with permissions
     */
    public function permissions()
    {
        $this->belongsToMany('App\Permission','permission_role','role_id','permission_id');
    }

    /**
     * converts role key into uppercase
     */
    public function getNameAttribute($value)
    {
       return strtoupper($value);
    }
}
