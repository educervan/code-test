<?php

namespace App\Repositories;

use App\Http\Requests\UserCreateRequest;

/**
 * Class UserRepositoryInterface
 * @package   App\Repositories;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
interface UserRepositoryInterface
{
    /**
     * @param UserCreateRequest $payload
     * @return mixed
     */
    public function register(UserCreateRequest $payload);

}
