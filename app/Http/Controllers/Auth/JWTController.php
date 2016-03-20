<?php

namespace App\Http\Controllers\Auth;

use JWTAuth;
use App\Http\Controllers\Controller;
use TymonJWTAuthExceptionsJWTException;
use Illuminate\Http\Request;
use Auth;

class JWTController extends Controller
{

    public function index()
    {
        // TODO: show users
    }    
  
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');


        try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // if no errors are encountered we can return a JWT
        return response()->json(compact('token'));
    }
}