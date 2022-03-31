<?php


namespace App\Repositories;

use App\Models\Text;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * Class TextRepository
 * @package   App\Repositories;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
class TextRepository implements TextRepositoryInterface
{
    /** @var Text $model */
    protected $model;

    /**
     * UserRepository constructor.
     * @param Text $model
     */
    public function __construct(Text $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function getText()
    {
        return $this->model->all();
        
    }
}
