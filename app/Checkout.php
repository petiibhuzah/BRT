<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable=[
        'user_id','token','amount','currency','description','unique_id',
    ];
}
