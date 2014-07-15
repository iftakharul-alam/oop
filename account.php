<?php
    class Account
    {
        private $account_number;
        private $open_date;
        private $balance;

        function __construct($account_number, $open_date)
        {
            $this->account_number = $account_number;
            $this->open_date = $open_date;
            $this -> balance = 0;
        }

        public function getAccountNumber()
        {
            return $this->account_number;
        }

        public function getOpenDate()
        {
            return $this->open_date;
        }

        public function getBalance()
        {
            return $this->balance;
        }

        function deposit($amount)
        {
            $this -> balance += $amount;
            echo "deposited";
        }

        function withdraw($amount)
        {
            $this -> balance -= $amount;
            echo "withdrawn";
        }

    }