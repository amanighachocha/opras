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
    public function setTargets()
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
        return $this->belongsToMany('App\Role','user_accounts','user_id','role_id');
    }

    /** 
     * Establish many to many polymorphic relationship with targets as assignee of targets
     */
    public function assignable()
    {
        return $this->morphToMany();
    }

    /**
     * Access the username using accessor
     */
    public function getUsernameAttribute($value)
    {
        return $this->first_name.' '.$this->last_name;
    }
}
