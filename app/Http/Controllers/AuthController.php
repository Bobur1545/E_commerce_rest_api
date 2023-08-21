<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request):JsonResponse
    {
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->success(
            "User's token has been created successfully",['token' => $user->createToken($request->email)->plainTextToken]
        );
    }

    /*
     * TODO register function should be corrected and edited
     */

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
//        auth()->login($user);

        return $this->success('user has been succesfully created');
    }

    public function user(Request $request): JsonResponse
    {
        return $this->response(new UserResource($request->user()));
    }

    public function changePassword()
    {

    }

}
