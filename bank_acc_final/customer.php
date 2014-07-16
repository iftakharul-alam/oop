<?php
class Customer
{
    private $name;
    private $mail;
    private $account;
            
    function __construct($name, $mail) {
        $this->name = $name;
        $this->mail = $mail;
    }
    
    public function get_name() {
        return $this->name;
    }

    public function get_mail() {
        return $this->mail;
    }
    /**
     * 
     * @return Account
     */
    public function get_account() {
        return $this->account;
    }

    public function set_account($account) {
        $this->account = $account;
    }



}

