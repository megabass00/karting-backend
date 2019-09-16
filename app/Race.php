<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\URL;

class Race extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','start','finish','likes'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
    
    public function video()
    {
        return $this->hasOne('App\Video');
    }

    public function laps()
    {
        return $this->hasMany('App\Lap');
    }
}