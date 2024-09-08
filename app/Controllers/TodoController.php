<?php

namespace App\Controllers;

use App\Models\TodoModel;
use App\Models\UserModel;

class TodoController extends BaseController
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

    public function index()
    {
        if (!session()->get('username')) {
            return redirect()->to('/');
        }
        helper('form');

        $model = model(TodoModel::class);
        $data['todos'] = $model->getTodo();

        if(!$this->request->is('post'))
        {
            return view('todo_view', $data);
        }

        $post = $this->request->getPost([
            'kegiatan'
        ]);

        $model->addTodo($post);

        return redirect()->to('/todo');
    }

    public function delete($id)
    {
        $model = model(TodoModel::class);
        $model->deleteTodo($id);

        return redirect()->to('/todo');
    }

    public function update($id)
    {
        $model = model(TodoModel::class);
        $model->updateTodo($id);

        return redirect()->to('/todo');
    }
}