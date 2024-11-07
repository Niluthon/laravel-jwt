<?php

namespace App\Http\Controllers;

use App\Contracts\Auth\AuthServiceContract;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{

    public function __construct(
        private readonly AuthServiceContract $authService,
    ) {}


    public function login(AuthRequest $request): JsonResponse
    {

        $credentials = $request->safe(['email', 'password']);

        $token = $this->authService
            ->authenticate(
                login: $credentials['email'],
                password: $credentials['password']
            );

        return response()->json($token);
    }

    public function profile(): JsonResponse
    {
        return response()->json($this->authService->profile());
    }

    public function logout(): JsonResponse
    {
        $logout = $this->authService->logout();


        if (!$logout) {
            return response()->json(
                [
                    'message' => 'Something went wrong',
                ],
                status: 400
            );
        }

        return response()->json(['message' => 'Success'], status: 204);
    }
}
