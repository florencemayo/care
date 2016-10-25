<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuthExceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;

class AuthenticateController extends Controller
{
    public function __construct(){
    	$this->middleware('jwt.auth', ['except' => ['authenticate']]);
    }

    public function index() {
    	$users =  User::all();
    	return $users;
    }

    public function authenticate(Request $request) {
    	$credentials = $request->only('email', 'password');
    	try {
    		if (! $token = JWTAuth::attempt($credentials)){
    			return response()->json(['error' => 'invalid credentials'], 401);
    		}
    	} catch (JWTException $e) {
    		return response()->json(['error' => 'could not create token'], 500); 
    	}
    	return response()->json(compact('token'));
    }

    public function getAuthenticatedUser(){
        try{
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e){
            return reponse()->json(['token_absent'], $e->getStatusCode());
        }

        return response()->json(compact('user'));
    }
}
