<?php

namespace Neptunia\Controllers;

use Neptunia\Controller;
use Neptunia\Request;

class AuthController extends Controller
{
    public function login()
    {
        return $this->render('login');
    }
    public function register(Request $request)
    {
        if ($request->isPost()) {
            return "handle submit data";
        }
        return $this->render('register');
    }
}
