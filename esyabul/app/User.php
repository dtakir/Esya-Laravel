<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;
    protected $table ='users';
    protected $primaryKey='id';
    protected $cast =["id" => "INT"];
    protected $fillable = [
        'name', 'email', 'password','created_at','updated_at'
    ];
    public function products(){
        return $this->hasMany('App\Product');
    }
}
