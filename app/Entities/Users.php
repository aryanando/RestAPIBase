<?php

namespace App\Entities;
use CodeIgniter\Entity;

class Users extends Entity
{
    public function setPassword(string $pass)
    {
        $salt = uniqid('', true);
        $this->attributes['salt'] = $salt;
        // AUTHORIZATION ----------
        $this->attributes['password'] = base64_encode($this->attributes['username'].':'.$pass); 

        return $this;
    }
}