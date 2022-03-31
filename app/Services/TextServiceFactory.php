<?php

namespace App\Services;

use App\Repositories\TextRepositoryInterface;

/**
 * Class TextServiceFactory
 * @package   App\Services;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Code Test
 */
class TextServiceFactory
{

    /**
     * @return TextService
     */
    public function __invoke(): TextService
    {
        /** @var TextRepositoryInterface $textRepository */
        $textRepository = app(TextRepositoryInterface::class);

        return new TextService($textRepository);

    }

}
