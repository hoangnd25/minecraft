<?php

namespace Mine\UserBundle\Security;

use Symfony\Component\Security\Core\Encoder\BasePasswordEncoder;

class PasswordEncoder extends BasePasswordEncoder
{
    public function encodePassword($raw, $salt)
    {
        $hashed = hash('sha256',hash('sha256', $raw).$salt);
        $hashed = '$SHA$'.$salt.'$'.$hashed;

        return $hashed;
    }

    public function isPasswordValid($encoded, $raw, $salt)
    {
        $parts = explode('$',$encoded);
        $salt = $parts[2];

        return $this->comparePasswords($encoded, $this->encodePassword($raw, $salt));
    }
}