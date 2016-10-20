<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'item_id';

    protected $fillable = [ 'name', 'reg_num', 'price', 'description', 'place', 'bought' ];
    // protected $hidden = [ 'user_id' ];
}
