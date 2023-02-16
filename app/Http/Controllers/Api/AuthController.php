<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (! $token = Auth::attempt($credentials)) {
            return $this->sendError('Unauthorized',  __('admin.message.error'),JsonResponse::HTTP_UNAUTHORIZED);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        if ($request->password !== $request->confirm_password) {
            return $this->sendError('Confirm password is not correct',  __('admin.message.error'),JsonResponse::HTTP_UNAUTHORIZED);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'isAdmin' => '0',
            'isTeacher' => '0',
            'password' => Hash::make($request->password),
            'created_at' => new \dateTime,
            'updated_at' => new \dateTime,  
        ]);
        return $this->sendResponse($user, __('admin.message.success'));
    }

     /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $response = response()->json([
            'user' => Auth::user(),
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL()
        ]);
        return $this->sendResponse($response, __('admin.message.success'));
    }

}
