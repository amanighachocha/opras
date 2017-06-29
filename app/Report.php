<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
   protected $table = 'reports';

   /**
     * Establish one to many reverse polymorphioc relationship with departments
     */
    public function reportable()
    {
        return $this->morphTo();
    }

    /**
     * Establish one to many relationship with users
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
