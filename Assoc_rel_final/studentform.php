<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="studentform.php">
            <fieldset>
                <legend>Add Student</legend>
            Name:<input type="text" name="name"/><br/>
            Email:<input type="text" name="email"/><br/>
            Reg No:<input type="text" name="reg_no"/><br/>
            <input type="submit" value="Add" name="add"/>
            </fieldset>
        </form>
        <?php
            require 'department.php';
            require 'student.php';
            
            session_start();
            if(isset($_POST['add']))
            {
                $student = new Student($_POST['name'], $_POST['reg_no'],$_POST['email']);
                
                /* @var $department Department */
                $department = $_SESSION['department'];
                echo $department ->add_student($student);
                $_SESSION['department'] = $department;
                
            }
        ?>
    </body>
</html>
