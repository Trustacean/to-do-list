<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password_hash'];

    public function getUser($username)
    {
        return $this->where('username', $username)->first();
    }

    public function saveUser($username, $password)
    {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        return $this->insert([
            'username' => $username,
            'password_hash' => $passwordHash
        ]);
    }

    public function login($username, $password)
    {
        $user = $this->getUser($username);

        if ($user) {
            if (password_verify($password, $user['password_hash'])) {
                return true;
            }
        }

        return false;
    }
}