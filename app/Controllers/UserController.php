<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {

        if(!$this->request->is('post')){
            return view('login_view');
        };

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = model(UserModel::class);
        $login = $model->login($username, $password);

        if($login)
        {
            $session = session();
            $session->set('username', $username);
            return redirect()->to('/todo');
        }

        return redirect()->to('/');
    }

    public function register()
    {
        if(!$this->request->is('post')){
            return view('register_view');
        };

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = model(UserModel::class);
        $register = $model->saveUser($username, $password);

        if(!$register)
        {
            return redirect()->to('/register');
        }

        return redirect()->to('/');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}