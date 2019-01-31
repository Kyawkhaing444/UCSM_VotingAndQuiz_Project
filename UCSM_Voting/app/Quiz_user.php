<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Quiz_user extends Authenticatable
{
    use Notifiable;

    protected $guard = 'code';
    protected $fillable = ['name','password','Quiz_id','point','code','sec_name'];
}
