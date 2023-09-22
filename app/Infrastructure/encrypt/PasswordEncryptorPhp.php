<?php

namespace Alura\Arquitetura\Infra\Aluno;

use App\Domain\Entity\encrypt\PasswordEncryptor;

class PasswordEncryptorPhp implements PasswordEncryptor
{
    public function encrypt(string $senha): string
    {
        return password_hash($senha, PASSWORD_ARGON2ID);
    }

    public function check(string $senhaEmTexto, string $senhaCifrada): bool
    {
        return password_verify($senhaEmTexto, $senhaCifrada);
    }
}
