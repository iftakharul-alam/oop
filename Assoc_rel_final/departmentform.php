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
        <fieldset>
            <legend>Add Department</legend>
        <form method="post" action="departmentform.php">
            Code:<input type="text" name="code"/><br/>
            Name:<input type="text" name="dep_name"/><br/>
            <input type="submit" value="Add" name="add"/>
        </fieldset>
        </form>
        <?php
        require 'student.php';
        require 'department.php';
        session_start();
        if(isset($_POST['add']))
        {
            $department = new Department($_POST['code'], $_POST['dep_name']);
            $_SESSION['department'] = $department;
            echo 'department created';
        }
        ?>
    </body>
</html>
