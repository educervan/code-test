<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

/**
 * Class UserServiceFactory
 * @package   App\Services;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
class UserServiceFactory
{

    /**
     * @return UserService
     */
    public function __invoke(): UserService
    {
        /** @var UserRepositoryInterface $userRepository */
        $userRepository = app(UserRepositoryInterface::class);

        return new UserService($userRepository);

    }

}
