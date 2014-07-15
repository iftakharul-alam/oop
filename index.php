<?php
    require_once 'account.php';
    require_once 'customer.php';

    $account = new Account('007','2nd july');

    $account -> deposit(300);
    $account -> withdraw(200);

    $customer = new Customer();

    $customer -> setName('bappa');
    $customer -> setEmail('w@gmail.com');
    $customer -> setAccount($account);

    echo $customer -> getAccount() -> getBalance()."<br/>";

    $customer -> getAccount() -> deposit(400);

    echo $customer -> getAccount() -> getBalance();