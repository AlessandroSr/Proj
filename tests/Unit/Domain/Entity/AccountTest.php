<?php

namespace Tests\Unit\Domain\Entity;

use PHPUnit\Framework\TestCase;
use App\Domain\Entity\Account;

class AccountTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $cpf = "123.456.789-98";
        $username = "alessandro";
        $email = "email@email.com";
        $password = "123";

        $account = Account::CpfNameEmailPassword($cpf, $username, $email, $password);

        $this->assertEquals('alessandro', $account->getUsername());
        $this->assertEquals('123', $account->getPassword());
    }
}
