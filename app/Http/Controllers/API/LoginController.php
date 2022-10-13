<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $success = 200;
    protected $error = 401;
    
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->input('email'),
        'password'=>$request->input('password')])){
            $user = Auth::user();
            
            $data['token']=$user->createToken()->accessToken;
            $data['id']=$user->id;
        }
        return Response::json(['data'=>$data],$this->success,[],JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}