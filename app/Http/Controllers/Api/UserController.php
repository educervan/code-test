<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserServiceInterface;
use App\Http\Requests\UserCreateRequest;

/**
 * Class UserController
 * @package   App\Repositories;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
class UserController extends Controller
{
    /** @var UserServiceInterface $userService */
    protected $userService;

    /**
     * UserController constructor.
     * @param UserServiceInterface $userService
     */

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(UserCreateRequest $request) 
    {
        try {

            return $this->userService->register($request);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error'  => 'error',
                'data'   => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout() 
    {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() 
    {
        return $this->createNewToken(auth()->refresh());
    }
}
