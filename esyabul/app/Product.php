<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'baslik', 'ozellik', 'il_id', 'ilce_id', 'user_id'];

    public function il()
    {
        return $this->hasOne('App\il','id','il_id');

    }

    public function ilce()
    {
        return $this->hasOne('App\ilce','id','ilce_id');


    }

    public function user()
    {
        return $this->belongsTo('App\User');


    }
    public  function productphoto(){
        return $this->hasMany('App\ProductsPhoto');
    }

}