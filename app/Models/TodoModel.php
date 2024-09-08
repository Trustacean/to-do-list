<?php

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'todolist';
    protected $primaryKey = 'idkegiatan';
    protected $allowedFields = ['kegiatan', 'status', 'username'];
    
    public function getTodo()
    {
        $session = session();
        $user = $session->get('username');
        return $this->where('status', 1)->where('username', $user)->findAll();
    }

    public function addTodo($record)
    {
        $session = session();
        $user = $session->get('username');
        $this->insert([
            'kegiatan' => $record['kegiatan'],
            'status' => 1,
            'username' => $user
        ]);
    }

    public function updateTodo($id)
    {
        $this->where('idkegiatan', $id)->set(['status' => 0])->update();
    }

    public function deleteTodo($id)
    {
        $this->where('idkegiatan', $id)->delete();
    }
    
}