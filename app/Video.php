<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title','url'];

    public function race()
    {
        return $this->hasOne('App\Race');
    }
}