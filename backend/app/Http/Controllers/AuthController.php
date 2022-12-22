<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use \stdClass;
use Validator;

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

        return response()
            ->json(['data'=>$user, 'access_token' => $token, 'token_type' => 'Bearer',]);
    }

    public function login(Request $request){

        if(!Auth::attempt($request->only('email','password'))){
            
            return response()
                ->json(['message' => 'Unauthorized', 401]);

        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json ([

                'message' => 'Hi '.$user->userName,
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ]);
    }

    public function userProfile() {
        return response ()->json([
            'status' => 0,
            'message' =>"About user profile",
            'data' => auth()->user()
        ], 404);
    }

    public function logout(){

        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out!'
        ];
    }
}
