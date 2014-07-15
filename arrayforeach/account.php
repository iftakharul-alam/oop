<?php
class Account
{
    private $name;
    private $account;
    private $balance;



    public function getName()
    {
        return $this -> name;
    }

    public function getAccount()
    {
        return $this -> account;
    }


    public function getBalance()
    {
        return $this -> balance;
    }

    function __construct($name, $account)
    {
        $this-> name = $name;
        $this-> account = $account;
        $this -> balance = 0;
    }

    public function deposit($amount)
    {
        $this -> balance = $this -> balance + $amount;
    }

    public function withdraw($amount)
    {
        if($this -> balance - $amount >= 0)
        {
            $this -> balance = $this -> balance - $amount;

        }

    }
}
