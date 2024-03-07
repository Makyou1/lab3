<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestsModel extends Model
{
    protected $table = 'myguests';
    
    public function getGuest($email = false)
    {
        if ($email === false) {
            return $this->findAll();
        }

        return $this->where(['email' => $email])->first();
    }

    public function saveGuest($data)
    {
        return $this->insert($data);
    }

    public function updateGuest($email, $data)
    {
        return $this->update(['email' => $email], $data);
    }
}