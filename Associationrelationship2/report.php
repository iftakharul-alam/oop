<?php
{

    require 'student.php';
    require 'department.php';
    session_start();
    /* @var $department Department */
    $department = $_SESSION['department'];

    echo $department -> getCode()."<br/>";
    echo $department -> getName()."<br/>";
    echo $department -> getNoOfStudent().'<br/>';

    echo 'Name Email Regno';

    foreach($department -> getAllStudent() as $a_student)
    {
       echo $a_student -> get;
    }

}
?>
<br/>
<a href="index.php">Home</a>