<?php
require_once 'account.php';
require_once 'customer.php';

$_SESSION['my_customer'] = $customer;
$_SESSION['account'] = $account;

echo $customer -> getName()."<br/>";
echo $customer -> getEmail()."<br/>";
echo $customer -> getAccount() -> getAccountNumber()."<br/>";
echo $customer -> getAccount() -> getOpenDate()."<br/>";