<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Establish one to many relationship with departments
     */
    public function department()
    {
        return $this->belongsTo('App\Department','department_id');
    }

    /**
     * Establish one to many relationship with targets
     */
    public function targets()
    {
        return $this->hasMany('App\Target','user_id');
    }

    /**
     * Establish one to many relationship with reports
     */
    public function reports()
    {
        return $this->hasMany('App\Report','user_id');
    }


    /**
     * Establish one to many relationship with sub targets
     */
    public function directorSubtargets()
    {
        return $this->hasManyThrough('App\SubTarget','App\Target');
    }

    /**
     * Establish one to many relationship with sub targets
     */
    public function managerSubtargets()
    {
        return $this->hasMany('App\SubTarget','user_id');
    }


    /*
     * Establish many to many relationship with roles
     */
    public function roles()
    {
        $this->belongsToMany('App\Role','user_accounts','user_id','role_id');
    }
}
