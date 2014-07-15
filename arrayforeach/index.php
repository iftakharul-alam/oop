<?php
    require 'account.php';
    $account1 = new Account('luiz','w-001');
    $account1 -> deposit(1000);
    $account1 -> withdraw(100);
    $account2 = new Account('Caban','x-001');
    $account2 -> deposit(50000);
    $account3 = new Account('Ruby','y-001');
    $account3 -> deposit(6000);

    $accounts = array();
    $accounts[] = $account1;
    $accounts[] = $account2;
    $accounts[] = $account3;

    foreach($accounts as $acc)
    {
        echo $acc -> getName().' '.$acc -> getBalance().'<br/>';
    }

