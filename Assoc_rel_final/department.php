<?php

class Department
{
    private $code;
    private $name;
    private $student_list;
    private $MAX_NO = 8;
            
    function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
        $this->student_list = array();
    }
    public function add_student($new_student)
    {
        if(count($this->student_list) < $this->MAX_NO)
        {
            foreach ($this->student_list as $student)
            {
                if($new_student->get_reg_no() == $student->get_reg_no())
                {
                    $this->student_list[] = $new_student;
                    return 'already exists but added';
                }
            }
            $this->student_list[] = $new_student;
            return 'student added';
        }
        else
        {
            return 'No space'; 
        }
        
    }
    public function get_code() {
        return $this->code;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_no_of_student() {
        return count($this->student_list);
    }
    
    public function get_all_students(){
        return $this->student_list;
    }

}