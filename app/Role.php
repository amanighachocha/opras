<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    /*
     * Establish many to many relationship with users
     */
    public function users()
    {
        $this->belongsToMany('App\User','user_accounts','role_id','user_id');
    }

    /**
     * converts role key into uppercase
     */
    public function getNameAttribute($value)
    {
       return strtoupper($value);
    }
}
