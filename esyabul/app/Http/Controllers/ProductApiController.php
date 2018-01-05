<?php

namespace App\Http\Controllers;

use App\Acme\Transformers\ProductTransformer;
use Illuminate\Http\Request;
use App\Product;
class ProductApiController extends Controller
{
    protected $productTransformer;
    function __construct(ProductTransformer $productTransformer)
    {
        $this->productTransformer=$productTransformer;

    }
    public function index(){
        $product=Product::all();
        if (! $product)
        {
            return $this->respondNotFound('lesson does not exist!');

        }
        return Response()->json([
            'data' =>$this->productTransformer->transformCollection($product->all())
        ],200);
    }
    public function  show($id){
        $product=Product::find($id);
        if (! $product)
        {
            return $this->respondNotFound('lesson does not exist!');

        }
        return Response()->json([
            'data'=> $this->productTransformer->transform($product)

        ],200);
    }
    public function store(Request $request){

        $product=product::create($request->all());
        return response()->json($product);
    }
    public function update(Request $request,$id){
        $product=product::find($id);
        $product->product=$request->input('product');
        $product->save();
        return response()->json($product);
    }
    public function destroy($id){
        $product=product::find($id);
        $product->delete();
        return response()->json('successful');
    }

}
