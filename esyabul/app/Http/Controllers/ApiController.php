<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function getJson($uri){

      return json_encode($this->callAction('get',$uri)->getContent());
   }
}
