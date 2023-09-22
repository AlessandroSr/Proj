<?php

namespace App\Application\UseCase;

use App\Domain\Entity\Enterprise;
use App\Domain\Repository\EnterpriseRepositoryInterface;

class ManageEnterprisesUseCase
{
    private EnterpriseRepositoryInterface $enterpriseRepository;

    public function __construct(EnterpriseRepositoryInterface $enterpriseRepository)
    {
        $this->enterpriseRepository = $enterpriseRepository;
    }

    public function createEnterprise(string $name): Enterprise
    {
        $enterprise = new Enterprise();
        $enterprise->setName($name);
        $this->enterpriseRepository->save($enterprise);

        return $enterprise;
    }
}
