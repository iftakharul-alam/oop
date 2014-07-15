<form>
    Name:<input type="text" name="name"><br/>
    Registration:<input type="text" name="reg"><br/>
    Email:<input type="text" name="mail"><br/>
    <input type="submit" value="Add" name="save">
</form>
<?php
{
    require 'student.php';
    require 'department.php';
    session_start();

    if(isset($_GET['save']))
    {
        $student = new Student($_GET['name'],$_GET['reg'],$_GET['mail']);
        /* @var $department Department */
        $department = $_SESSION['department'];
        echo $department ->add_student($student);
        $_SESSION['department'] = $department;

    }
}
?>
<br/>
<a href="index.php">Home</a>