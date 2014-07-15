<?php
class Department
{
    private $name;
    private $code;
    private $student_list;
    private $max;

    function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this ->student_list = array();
    }

    public function add_student($a_student)
    {
        if(count($this->student_list) < $this -> max)
        {
            $this -> student_list[] = $a_student;
            return 'student added';
        }
        else
        {
            return 'no vacancy';
        }
    }

    public function getNoOfStudent()
    {
        return count($this -> student_list);
    }

    public function getAllStudent()
    {
        return $this -> student_list;
    }



    public function getName()
    {
        return $this->name;
    }

    public function getCode()
    {
        return $this->code;
    }




}