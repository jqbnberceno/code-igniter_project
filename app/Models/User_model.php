<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table = 'account';
    protected $allowedFields = ['username', 'email', 'password', 'code', 'active'];

    protected function setPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function registerUser(array $data)
    {
        if (!isset($data['password'])) {
            throw new \RuntimeException('Password is required.');
        }

        $data['password'] = $this->setPassword($data['password']);
        $data['code'] = ''; // Initialize the code field

        return $this->insert($data);
    }

    public function sendVerificationCode($username)
    {
        // ... (same as previous implementation)
    }

    public function verifyAccount($username, $verificationCode)
    {
        // ... (same as previous implementation)
    }

    protected function generateVerificationCode()
    {
        // ... (same as previous implementation)
    }
}
