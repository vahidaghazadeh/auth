<?php
namespace magenfa\auth;
use Magenfa\Core\Controller;
use Magenfa\Core\Request;

class AuthController extends Controller{
    public function login()
    {
        return $this->view('login');
    }

    public function register(Request $request)
    {
        if ($request->getMethod())
        return $this->view('register');
    }

    public function logout(Request $request)
    {
    }
}