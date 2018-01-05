<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;
use App\User;
class KullaniciController extends Controller
{
    public function signinAction(){
        return view('pages.signin');
    }
    public function kayitAction(){
        return view('pages.kkayit');
    }

    public function signupprocess(Request $request)
    {
        $names = $request->input('name');
        $pass = $request->input('psw');
        $email = $request->input('email');
        $gelen = array('name' => $names, 'password' => $pass, 'email' => $email);
        DB::table('users')->insert($gelen);
        return view('pages.giris');
    }
    public function loginprocess(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        $checkuser = User::selectraw("count(*) as Total")->where('name', '=', $username)->first();
        if (intval($checkuser->Total) > 0) {
            $sql = User::select('password','id','name')->where('name', '=', $username)->first();

           if ($password == $sql->password) {
                $request->session()->put('oturum', true);
                $request->session()->put('userid', $sql->id);
                $request->session()->put('username', $sql->name);

                return redirect('/');
            } else {
                echo "<br />sifre yanlis";
            }
        } else {
            echo "boyle bir kullanici yok";
        }
    }
    public function logoutprocess(Request $request)
    {
        $request->session()->forget('oturum');
        $request->session()->forget('username');
        $request->session()->flush();
        return redirect('/');

    }
    public function anasayfaAction(){
        
        return view('pages.anasayfa');
    }
    public function profilAction(Request $request)
    {
        $user = User::all()->where('name', '=', session()->get('username'));
        foreach ($user as $use) {
            $userr = $use->id;


            $product = Product::all()->where('user_id', '=', $userr);
            return view('pages.profil', compact('user', 'product'));
        }
    }
}
