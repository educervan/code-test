<?php


namespace App\Repositories;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserRepository
 * @package   App\Repositories;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
class UserRepository implements UserRepositoryInterface
{
    /** @var User $model */
    protected $model;

    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function register(UserCreateRequest $payload)
    {
        $data = $payload->all();
        $data['password'] = Hash::make($payload->get('password'));
        return $this->model->create($data);
    }
}
