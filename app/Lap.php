<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lap extends Model
{
    protected $fillable = [
        'point_1', 'point_2', 'point_3',
    ];

    public function race()
    {
        return $this->belongsTo('App\Race');
    }
}