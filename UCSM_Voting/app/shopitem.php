<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopitem extends Model
{
    protected $fillable = ['id','name','photoURL','price','shop_id'];
}
