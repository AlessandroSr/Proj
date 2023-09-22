<?php

namespace App\Domain\Entity;

use App\Domain\Entity\Obj\Cpf;
use App\Domain\Entity\Obj\Email;

class Account
{
    private ?int $id;
    private string $username;
    private string $password;
    private Email $email;
    private Cpf $cpf;


    public static function CpfNameEmailPassword(string $cpf, string $username, string $email, string $password): self
    {
        return new Account(new Cpf($cpf), $username, new Email($email), $password);
    }

    public function __construct(Cpf $cpf, string $username, Email $email, $password)
    {
        $this->id = null;
        $this->cpf = $cpf;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        return $this->cpf = $cpf;
    }

    public function getEmail(): string
    {
        return $this->cpf;
    }

    public function setEmail(string $email)
    {
        return $this->email = $email;
    }
}
