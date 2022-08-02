<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //valid credential
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // 'device_name' => 'required',
        ]);
        //Request is validated
        //Crean token
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                	'success' => false,
                	'message' => 'User credentials tidak valid.',
                ], 500);
            }
        } catch (JWTException $e) {
    	return $credentials;
            return new JsonResponse([
                	'success' => false,
                	'message' => 'Could not create token.',
                ], 500);
        }

 		//Token created, return with success response and jwt token
        return new JsonResponse([
            'success' => true,
            'token' => $token,
            'user' => $request->user(),
        ]);
    }

    public function logout(Request $request)
    {
        //valid credential
        // $validator = Validator::make($request->only('token'), [
        //     'token' => 'required'
        // ]);

        // //Send failed response if request is not valid
        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->messages()], 200);
        // }

		//Request is validated, do logout
        try {
            JWTAuth::invalidate();

            return response()->json([
                'success' => true,
                'message' => 'User has been logged out'
            ]);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, user cannot be logged out'
            ]);
        }
    }
}
