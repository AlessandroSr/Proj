<?php

namespace Tests\Unit\Domain\Entity;

use PHPUnit\Framework\TestCase;
use App\Domain\Entity\Enterprise;

class EnterpriseTest extends TestCase
{
    public function testGettersAndSetters()
    {
        $account = new Enterprise();
        $account->setName('testuser');

        $this->assertEquals('testuser', $account->getName());
    }
}
