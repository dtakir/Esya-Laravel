<?php


namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\il;
use App\Product;
use App\ProductsPhoto;
use Illuminate\Http\Request;


class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('pages.giris');
    }
    public function uploadSubmit(UploadRequest $request)
    {
     $produc=Product::all();
        $il =il::all();
        $deger=$request->all();
        $deger['user_id']=session()->get('userid');
        $deger['il_id']=$request->il;
        $deger['ilce_id']=$request->ilce;
        $product = Product::create($deger
        );
        foreach ($request->photos as $photo) {
            $filename = $photo->store("public/upload");
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return view('pages.ilanver',compact('produc','il'));
    }


}
