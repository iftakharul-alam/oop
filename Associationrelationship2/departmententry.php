<html>
<form>
    Code:<input type="text" name="code"><br/>
    Name:<input type="text" name="d_name"><br/>
    <input type="submit" value="Add" name="save">
</form>
<?php
{
    require 'student.php';
    require 'department.php';
    session_start();

    if(isset($_GET['save']))
    {
        $department = new Department($_GET['code'],$_GET['d_name']);
        $_SESSION['department'] = $department;
        echo 'department created';
    }
}
?>
<br/>
<a href="index.php">Home</a>
</html>