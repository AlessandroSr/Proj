<?php

namespace App\Domain\Entity\encrypt;

interface PasswordEncryptor
{
    public function encrypt(string $senha): string;
    public function check(string $senhaEmTexto, string $senhaCifrada): bool;
}
