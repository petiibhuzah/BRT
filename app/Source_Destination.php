<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source_Destination extends Model
{
    protected $fillable=[
        'source_destination_id','source_destination_name','image','price','description',
    ];
}
