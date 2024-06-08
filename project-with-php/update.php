<?php
    if(isset($_POST['submit']))
    {
        include 'connect.php';
        $id=$_GET['updatedid'];
        $name= $_POST['name'];
        $age=$_POST['age'];
        $class=$_POST['class'];

        $sql1="update `crud` set `S_No`='$id',`Name`='$name',`Age`='$age',`Class`='$class' where `S_No`='$id'";
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
    <form method="post" action='update.php?updatedid=<?php echo $_GET['updatedid'];?>'>
        <label>Name</label>
        <input type="text" placeholder="enter your name" name="name"> <br><br>
        <label>Age</label>
        <input type="number" placeholder="enter your age" name="age"><br><br>
        <label>Class</label>
        <input type="number" placeholder="enter your class" name="class"><br><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>
