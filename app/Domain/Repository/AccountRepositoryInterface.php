<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Account;

interface AccountRepositoryInterface
{
    public function findById(int $id): ?Account;
    public function findByUsername(string $username): ?Account;
    public function save(Account $account): void;
    public function update(Account $account): void;
    public function delete(Account $account): void;
    public function findAll(): array;
}
