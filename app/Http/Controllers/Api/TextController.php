<?php

namespace App\Http\Controllers\Api;

use App\Models\Text;
use Illuminate\Http\Request;
use App\Services\TextServiceInterface;
use App\Http\Controllers\Controller;

class TextController extends Controller
{

    /** @var UserServiceInterface $userService */
    protected $textService;

     /**
     * TextController constructor.
     * @param TextServiceInterface $textService
     */
    public function __construct(TextServiceInterface $textService)
    {
        $this->textService = $textService;
    }


    public function index() 
    {
        return response()->json([
            'status' => true,
            'texts'   => $this->textService->getTexts()
        ], 200);
    }

   
}
