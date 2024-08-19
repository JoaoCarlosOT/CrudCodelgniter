<?php

namespace App\Controllers;

class LoginController extends BaseController
{ 
    public function Viewlogin()
    {
        return view('partils/head')
            . view('login') 
            . view('partils/foot');
    }

    public function login()
    {
        $session = session();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($email === 'admin@gmail.com' && $password === '1234') {
            $session->set('isLoggedIn', true);
            return redirect()->to('/');
        } else {
            return redirect()->back()->with('error', 'Credenciais inválidas.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
