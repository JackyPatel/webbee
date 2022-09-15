<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany('App\Models\Workshop','event_id');
    }

    // public function eventNotStarted()
    // {
    //     return $this->workshops()->whereDate('start','>=', \Carbon\Carbon::now());
    // }
}
