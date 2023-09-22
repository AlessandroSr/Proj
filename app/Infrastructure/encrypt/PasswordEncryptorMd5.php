<?php

namespace App\Infrastructure\encrypt;

use App\Domain\Entity\encrypt\PasswordEncryptor;

class PasswordEncryptorMd5 implements PasswordEncryptor
{
    public function encrypt(string $senha): string
    {
        return md5($senha);
    }

    public function check(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return md5($senhaEmTexto) === $senhaCifrada;
    }
}
