<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    /**
     * Establish one to many relationship with users
     */
    public function users()
    {
        return $this->hasMany('App\User','department_id');
    }
}
