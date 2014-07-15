<?php
    class Customer
    {
        private $name;
        private $email;
        private $account;

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setAccount($account)
        {
            $this->account = $account;
        }

        /**
         * @return Account
         */
        public function getAccount()
        {
            return $this->account;
        }


    }