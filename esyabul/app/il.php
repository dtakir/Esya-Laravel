<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class il extends Model
{
    protected $table='ils';

    protected $fillable = ['il'];
 public function il(){
     return $this->belongsTo('App\Product');
 }
public function ilce(){
    return $this->hasMany('App\ilce','ilID' ,'id');
}
}
