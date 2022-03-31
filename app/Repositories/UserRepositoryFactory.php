<?php


namespace App\Repositories;


use App\Models\User;

/**
 * Class UserRepositoryFactory
 * @package   App\Repositories;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
class UserRepositoryFactory
{
    /**
     * @return UserRepository
     */
    public function __invoke(): UserRepository
    {

        $model = app(User::class);

        return new UserRepository(
            $model
        );
    }

}
