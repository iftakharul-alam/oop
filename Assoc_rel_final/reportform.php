<?php
require 'department.php';
require 'student.php';
session_start();


$department = $_SESSION['department'];
/* @var $department Department */
$i=1;
?>
<fieldset>
    <legend>View student & dept Info</legend><?php
echo 'Department Code : '.$department->get_code()."<br/>";
echo 'Department Name: '.$department->get_name()."<br/>";
echo 'No of Student: '.$department->get_no_of_student()."<br/>";
echo "Name   Registration_No<br/>";
foreach ($department ->get_all_students() as $list){
    echo $i.". ".$list->get_name().'---'.$list->get_email().'---'.$list->get_reg_no()."<br/>";
    $i++;
}
?>
</fieldset>
