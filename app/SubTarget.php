<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTarget extends Model
{
    protected $table = 'sub_targets';

    /**
     * Establish one to many relationship with targets
     */
    public function target()
    {
        return $this->belongsTo('App\Target','target_id');
    }

    /**
     * Establish one to many relationship with user
     */
    public function user()
    {
        return $this->belongsTo('App\User','target_id');
    }

    /**
     * Establish one to many polymorphic relationship with reports
     */
    public function reports()
    {
        return $this->morphMany('App\Report','reportable');
    }
}
