<?php


namespace App\Repositories;

use App\Models\Text;

/**
 * Class TextRepositoryFactory
 * @package   App\Repositories;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
class TextRepositoryFactory
{
    /**
     * @return TextRepository
     */
    public function __invoke(): TextRepository
    {

        $model = app(Text::class);

        return new TextRepository(
            $model
        );
    }

}
