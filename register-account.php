<?php

use App\Application\UseCase\ManageEnterprisesUseCase;
use App\Domain\Entity\Account;
use App\Infrastructure\Account\AccountRepository;

require 'vendor/autoload.php';

$cpf = "1234.456.789-98";
$username = "alessandro";
$email = "email@email.com";
$password = "123";

$cpf2 = "666.456.789-98";
$username2 = "alessandro ramos";
$email2 = "email2@email.com";
$password2 = "123456";

$repositorio = new AccountRepository();
$account = Account::CpfNameEmailPassword($cpf, $username, $email, $password);
$repositorio->adicionar($account);

$account = Account::CpfNameEmailPassword($cpf2, $username2, $email2, $password2);
$repositorio->adicionar($account);

//Traz todo mundo
$repositorio->findAll();

//Filtra pelo nome
$repositorio->findByUsername('alessandro ramos');

