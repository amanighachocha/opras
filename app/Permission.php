<?php

namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';

    /*
     * Establish many to many relationship with roles
     */
    public function roles()
    {
        $this->belongsToMany('App\Role','permission_role','permission_id','role_id');
    }
}
