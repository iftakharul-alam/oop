<?php
class Account
{
    private $number;
    private $date;
    private $balance;
    private $calculator;
            
    function __construct($number, $date) {
        $this->number = $number;
        $this->date = $date;
        $this->balance = 0;
        $this->calculator = new Calculator();
    }
    

    public function get_number() {
        return $this->number;
    }

    public function get_date() {
        return $this->date;
    }

    public function get_balance() {
        return $this->balance;
    }

    public function deposit($amount){
        $this->balance = $this->calculator->add($this->balance, $amount);
        return 'deposited';
    }
    
    public function withdraw($amount){
        $this->balance = $this->calculator->sub($this->balance, $amount);
        return 'withdrawn';
    }

    
}