<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $user = User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json(['msg' => 'Unauthend'],401);
        }else{
            $token = $user->createToken('Restoran')->plainTextToken;
            return response(['token'=>$token,'user'=>$user]);
        }
    }
}
