<?php

namespace App\Http\Controllers;
use App\ilce;
use App\Product;
use App\ProductsPhoto;
use App\il;
use App\User;
use Illuminate\Http\Request;

class SayfaController extends Controller
{
public function anasayfa(){

    return view('pages.giris');

}
public function ProductAll(){
    $produc=Product::all();

    foreach ($produc as $pro){
        $product_id= $pro->id;
        $user_id= $pro->user_id;
        $resimler=ProductsPhoto::all()->where("product_id" ,"=",$product_id);

        $user=User::all()->where('id', '=' ,$user_id);
        return view('pages.giris',compact('produc','resimler','user'));
    }
}
 



/*
 * ajax kısmı
 */
public function ilcelerigetirAction(Request $request)
    {
        $id = $request->input('il');
        $data = ilce::select('id', 'ilce')->where('ilID', $id)->get();
        return response()->json($data);
    }
public function ilcelerigetir1Action(Request $request){
    $id1= $request->input('il1');
    $data1 = ilce::select('id', 'ilce')->where('ilID', $id1)->get();
    return response()->json($data1);
}
    /*
     * kayıt bulma
     */
public function esyabulAction(Request $request){
    $il=$request->input('il1');
            $esya=$request->input('esya1');
            $esyabul=product::all()->where('id','=',$esya)
                                   ->where('il_id','=',$il);
            $esyaresim=ProductsPhoto::all()->where('product_id','=',$esya);


            return view('pages.esyagoster',compact('esyabul','esyaresim'));

}


    public function esyaara(){
        $il =il::all();
        $produc=Product::all();
        return view('pages.esyaara', compact('produc','il'));

    }
    public function ilanver(){
        $il =il::all();
        $produc=Product::all();
        return view('pages.ilanver', compact('produc','il'));
    }
    public function EsyaGoster($id){

        $produc=Product::all()->where('id' ,'=',$id);
        return view('pages.esyagosterr', compact('produc'));
    }

}
