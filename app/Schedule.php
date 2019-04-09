<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $guarded = [];

    public $dates = [
        'week_start'
    ];

    public function captain()
    {
        return $this->belongsTo('App\Captain');
    }
  
}