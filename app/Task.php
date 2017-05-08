<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description'];


    /**
     * Define the relationship betwwen task and user.
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
