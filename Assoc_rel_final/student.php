<?php
class Student
{
    private $name;
    private $reg_no;
    private $email;
    
    function __construct($name, $reg_no, $email) {
        $this->name = $name;
        $this->reg_no = $reg_no;
        $this->email = $email;
    }
    public function get_name() {
        return $this->name;
    }

    public function get_reg_no() {
        return $this->reg_no;
    }

    public function get_email() {
        return $this->email;
    }



}