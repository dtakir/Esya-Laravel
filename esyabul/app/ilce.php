<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ilce extends Model
{
    protected $table='ilces';

    protected $fillable = ['ilce','ilID'];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
