<?php


namespace App\Services;

use App\Repositories\TextRepositoryInterface;
use App\Services\TextServiceInterface;

/**
 * Class TextService
 * @package   App\Services;
 * @author    Eduardo Cervan <eduardo.cervan@italenteti.com.br>
 * @copyright Cote Test
 */
class TextService implements TextServiceInterface
{
    /** @var TextRepositoryInterface $textRepository  */
    protected $textRepository;

    /**
     * TextService constructor.
     * @param TextRepositoryInterface $textRepository
     */
    public function __construct(TextRepositoryInterface $textRepository)
    {
        $this->textRepository = $textRepository;
    }

    /**
     * @inheritdoc
     */
    public function getTexts()
    {
        return $this->textRepository->getText();
    }
}
