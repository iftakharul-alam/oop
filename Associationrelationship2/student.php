<?php
class Student
{
    private $name;
    private $reg_no;
    private $email;

    function __construct($name,$email, $reg_no)
    {
        $this->name = $name;
        $this->reg_no = $reg_no;
        $this -> email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getRegNo()
    {
        return $this->reg_no;
    }



}