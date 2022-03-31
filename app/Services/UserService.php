<?php


namespace App\Services;

use App\Http\Requests\UserCreateRequest;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Validator;

/**
 * Class UserService
 * @package   App\Services;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Cote Test
 */
class UserService implements UserServiceInterface
{
    /** @var UserRepositoryInterface $userRepository  */
    protected $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @inheritdoc
     */
    public function register(UserCreateRequest $payload)
    {
        $validator = Validator::make($payload->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        return $this->userRepository->register($payload);
    }
}
