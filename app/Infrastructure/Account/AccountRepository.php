<?php

namespace App\Infrastructure\Account;

use App\Domain\Entity\Account;
use App\Domain\Entity\Obj\Cpf;
use App\Domain\Repository\AccountRepositoryInterface;

class AccountRepository implements AccountRepositoryInterface
{
    private array $accounts = [];

    public function adicionar(Account $account): void
    {
        $this->accounts[] = $account;
    }

    public function findById(int $id): ?Account
    {
        return $this->accounts[$id] ?? null;
    }

    public function findByUsername(string $username): ?Account
    {
        foreach ($this->accounts as $account) {
            if ($account->getUsername() === $username) {
                return $account;
            }
        }
        return null;
    }

    public function findByCpf(string $account): ?Account
    {
        foreach ($this->accounts as $account) {
            if ($account->getCpf() === $account->cpf) {
                return $account;
            }
        }
        return null;
    }

    public function save(Account $account): void
    {
        $id = count($this->accounts) + 1;
        $account->setId($id);
        $this->accounts[$id] = $account;
    }

    public function update(Account $account): void
    {
        $this->accounts[$account->getId()] = $account;
    }

    public function delete(Account $account): void
    {
        unset($this->accounts[$account->getId()]);
    }

    public function findAll(): array
    {
        return array_values($this->accounts);
    }
}
