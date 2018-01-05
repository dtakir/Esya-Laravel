<?php

namespace App\Http\Controllers;
use App\Acme\Transformers\ilceTransformer;
use App\il;
use App\ilce;
use Illuminate\Http\Request;

class ilceApiController extends Controller
{
    protected $ilceTransformer;
    function __construct(ilceTransformer $ilcesTransformer)
    {
        $this->ilceTransformer=$ilcesTransformer;

    }
    public function index($ilceId=null){

        $ilces=$ilceId ? il::find($ilceId)->ilce:ilce::all();
        return Response()->json([
            'data' =>$this->ilceTransformer->transformCollection($ilces->all())
        ],200);
    }
    public function  show($id){
        $ilces=ilce::find($id);
        if (! $ilces)
        {
            return $this->respondNotFound('lesson does not exist!');

        }
        return Response()->json([
            'data'=> $this->ilceTransformer->transform($ilces)

        ],200);
    }

}
