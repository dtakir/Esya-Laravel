<?php

namespace App\Http\Controllers;
use App\il;
use App\Acme\Transformers\ilTransformer;
use App\Product;
use Illuminate\Http\Request;

class ilApiController extends Controller
{
    protected $ilTransformer;
    function __construct(ilTransformer $ilsTransformer)
    {
        $this->ilTransformer=$ilsTransformer;

    }
    public function index(){


        $ils=il::all();
        return Response()->json([

            'data' =>$this->ilTransformer->transformCollection($ils->all())
        ],200);

    }
    public function  show($id){
        $ils=il::find($id);
        if (! $ils)
        {
            return $this->respondNotFound('lesson does not exist!');

        }
        return Response()->json([
            'data'=> $this->ilTransformer->transform($ils)

        ],200);
    }
    public function store(Request $request){

        $il=il::create($request->all());
           return response()->json($il);
    }
    public function update(Request $request,$id){
        $il=il::find($id);
        $il->il=$request->input('il');
        $il->save();
        return response()->json($il);
    }
    public function destroy($id){
         $il=il::find($id);
         $il->delete();
         return response()->json('successful');
    }



}
