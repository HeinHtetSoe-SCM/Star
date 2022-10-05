<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\StarPhoneServiceInterface;

class StarPhoneController extends Controller
{
    private $starPhoneService;

    public function __construct(StarPhoneServiceInterface $starPhoneServiceInterface)
    {
        $this->starPhoneService = $starPhoneServiceInterface;
    }
    
    public function index() {
        return $this->starPhoneService->getStarPhone();
    }
}
