<?php

namespace App\Http\Controllers;
use App\Acme\Transformers\UserTransformer;
use Illuminate\Http\Request;
use App\User;
class UserApiController extends Controller
{
    // api denemesi yapılan yer
    protected $userTransformer;
    function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer=$userTransformer;

    }
    public function index(){
        $users=User::all();
        return Response()->json([
            'data' =>$this->userTransformer->transformCollection($users->all())
        ],200);
    }
    public function  show($id){
        $users=User::find($id);
        if (! $users)
        {
            return $this->respondNotFound('Kullanıcı bulunamadı');

        }
        return Response()->json([
            'data'=> $this->userTransformer->transform($users)

        ],200);
    }

}
