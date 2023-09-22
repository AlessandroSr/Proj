<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Enterprise;

interface EnterpriseRepositoryInterface
{
    public function findById(int $id): ?Enterprise;
    public function save(Enterprise $enterprise): void;
    public function update(Enterprise $enterprise): void;
    public function delete(Enterprise $enterprise): void;
    public function findAll(): array;
}