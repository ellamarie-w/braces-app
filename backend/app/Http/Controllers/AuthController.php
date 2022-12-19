<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \stdClass;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'firstName'=> 'required|string|max:255',
            'lastName'=> 'required|string|max:255',
            'userName'=> 'required|string|max:255|unique:users',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=> 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'firstName'=> $request->firstName,
            'lastName'=> $request->lastName,
            'userName'=> $request->userName,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response();
            json(['data'=>$user, 'access_token' => $token, 'token_type' => 'Bearer',]);
    }
}
