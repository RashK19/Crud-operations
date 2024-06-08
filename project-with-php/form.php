<?php
    if(isset($_POST['name']) and ($_POST['age'] and ($_POST['class'])))
    {
        include 'connect.php';
        $name= $_POST['name'];
        $age=$_POST['age'];
        $class=$_POST['class'];

        $sql1="insert into `crud` (`name`,`age`,`class`) values('$name','$age','$class')";
        $result=mysqli_query($con,$sql1);
        if($result)
        {
            header('location:display.php');
        }
        else
        {
            die(mysqli_error($con));
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <h1>Form</h1>
    <form method="post" action="form.php">
        <label>Name</label>
        <input type="text" placeholder="enter your name" name="name"> <br><br>
        <label>Age</label>
        <input type="number" placeholder="enter your age" name="age"><br><br>
        <label>Class</label>
        <input type="number" placeholder="enter your class" name="class"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>