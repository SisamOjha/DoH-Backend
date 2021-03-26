<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class TokenController extends Controller
{
    //Register
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required',
            'email' =>'required|email',
            'password'=>'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message'=>'Bad Request',
                'code'=> 401
            ]);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            'message'=>'Account Created',
            'code'=>200
        ]);

    }

    //login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' =>'required|email',
            'password'=>'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message'=>'Bad Request',
                'code'=> 401
            ]);
        }

        $credentials = request(['email','password']);

        if(!Auth::attempt($credentials)){
            return response()->json([
                'message'=>'Unauthorized',
                'code'=>500
            ]);
        }

        //if clients come with email and password
        $user = User::where('email', $request->email)->first();

        //Generate Token
        $tokenResult = $user ->createToken('authToken')->plainTextToken;

        return response()->json([
            'code'=>200,
            'token'=>$tokenResult
        ]);

    }


    //Logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message'=>'Token Deleted',
            'code'=>200
        ]);

    }
}
