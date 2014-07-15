<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method ="POST">
            Department Code : <input type ="text" name ="codeText"><br/>
            Name : <input type ="text" name ="nameText"><br/>
            <input type="submit" value ="Save" name = 'save'>
        </form>
        <?php
        {
            require 'department.php';
            session_start();
            if (isset($_POST['save']))
            {
                $department = new Department($_POST['codeText'], $_POST['nameText']);
                $_SESSION['department'] = $department;
                echo 'department created';
            }
        }
        ?>
    </body>
</html>
