<?php


namespace App\Services;


use App\Http\Requests\UserCreateRequest;

/**
 * Class UserServiceInterface
 * @package   App\Services\Api;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
interface UserServiceInterface
{
    /**
     * Method response
     * @param UserCreateRequest $payload
     * @return mixed
     */
    public function register(UserCreateRequest $payload);

}
