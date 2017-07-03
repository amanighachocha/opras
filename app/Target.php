<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    protected $table = 'targets';

    /**
     * Establish one to many relationship with users
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    /**
     * Establish one to many relationship with sub targets
     */
    public function subtargets()
    {
        return $this->hasMany('App\SubTarget','target_id');
    }

    /**
     * Establish one to many polymorphic relationship with reports
     */
    public function reports()
    {
        return $this->morphMany('App\Report','reportable');
    }

    /**
     * Establish many to many polymorphic relationship with users as assignees
     */
    public function assignedUsers()
    {
    	return $this->morphToMany('App\User','target_assignments','assignable','user_id');
    }
}
