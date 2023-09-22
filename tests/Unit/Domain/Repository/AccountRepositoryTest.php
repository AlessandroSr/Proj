<?php

namespace Tests\Unit\Domain\Repository;

use App\Domain\Entity\Account;
use App\Infrastructure\Account\AccountRepository;
use PHPUnit\Framework\TestCase;

class AccountRepositoryTest extends TestCase
{
    private AccountRepository $accountRepository;

    protected function setUp(): void
    {
        $this->accountRepository = new AccountRepository();
    }

    public function testSaveAndFindById()
    {
        $cpf = "123.456.789-98";
        $username = "alessandro";
        $email = "email@email.com";
        $password = "123";

        $account = Account::CpfNameEmailPassword($cpf, $username, $email, $password);

        $this->accountRepository->save($account);

        $retrievedAccount = $this->accountRepository->findById($account->getId());

        $this->assertEquals('alessandro', $retrievedAccount->getUsername());
   
    }

    public function testFindByUsername()
    {
        $cpf = "123.456.789-98";
        $username = "alessandro";
        $email = "email@email.com";
        $password = "123";

        $account = Account::CpfNameEmailPassword($cpf, $username, $email, $password);

        $this->accountRepository->save($account);

        $retrievedAccount = $this->accountRepository->findByUsername('alessandro');

        $this->assertEquals('alessandro', $retrievedAccount->getUsername());
    }

    public function testUpdate()
    {
        $cpf = "123.456.789-98";
        $username = "alessandro";
        $email = "email@email.com";
        $password = "123";

        $account = Account::CpfNameEmailPassword($cpf, $username, $email, $password);

        $this->accountRepository->save($account);

        $account->setPassword('newpassword');
        $this->accountRepository->update($account);

        $retrievedAccount = $this->accountRepository->findById($account->getId());

        $this->assertEquals('newpassword', $retrievedAccount->getPassword());
    }

    public function testDelete()
    {
        $cpf = "123.456.789-98";
        $username = "alessandro";
        $email = "email@email.com";
        $password = "123";

        $account = Account::CpfNameEmailPassword($cpf, $username, $email, $password);

        $this->accountRepository->save($account);

        $this->accountRepository->delete($account);

        $retrievedAccount = $this->accountRepository->findById($account->getId());

        $this->assertNull($retrievedAccount);
    }

    public function testFindAll()
    {
        $cpf = "123.456.789-98";
        $username = "alessandro";
        $email = "email@email.com";
        $password = "123";

        $account1 = Account::CpfNameEmailPassword($cpf, $username, $email, $password);

        $cpf2 = "123.456.789-98";
        $username2 = "alessandro";
        $email2 = "email@email.com";
        $password2 = "123";

        $account2 = Account::CpfNameEmailPassword($cpf, $username, $email, $password);

        $this->accountRepository->save($account1);
        $this->accountRepository->save($account2);

        $allAccounts = $this->accountRepository->findAll();

        $this->assertCount(2, $allAccounts);
    }
}
