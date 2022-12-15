<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Api\AuthInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public $authInterface;
    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface=$authInterface;
    }

    public function register(Request $request)
    {
        return $this->authInterface->register($request);
    }

    public function login(Request $request)
    {
        return $this->authInterface->login($request);
    }
}
