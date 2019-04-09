<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    public $guarded = [];

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }

    public function fullname()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}
