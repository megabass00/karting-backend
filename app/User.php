<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\URL;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasApiTokens;

    protected $fillable = ['name', 'surname', 'image', 'email', 'password'];
    protected $hidden = ['password'];
    protected $dates = ['deleted_at'];

    public function getUrlImageAttribute($value)
    {
        return URL::to('/').'/images/users/'. $this->image;
    }
}
