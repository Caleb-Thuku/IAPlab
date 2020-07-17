<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $table = "Cars";

    protected $fillable = [

    		'make',
    		'model',
    		'image',
    		'year'

    ];

    public function reviews(){
    	return $this->hasMany('App\Review','car_id');
    }
}
