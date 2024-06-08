<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
   <a href="form.php"> <button name="add">Add user</button> </a>
</div>
<table border="2px">
<tr>
    <td>S No.</td>
    <td>Name</td>
    <td>Age</td>
    <td>Class</td>
    <td colspan="2">Operations</td>
</tr>
<?php
    $sql="SELECT  * FROM  `crud`";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        while($row= mysqli_fetch_assoc($result))
        {
            $sno= $row["S_No"];
            $name=$row["Name"];
            $age=$row["Age"];
            $class=$row["Class"];
            echo "<tr>
            <th>$sno</th>
            <th>$name</th>
            <th>$age</th>
            <th>$class</th>
            <th><button><a href='update.php?updatedid=$sno'>Update</a></button></th>
            <th><button><a href='delete.php?deletedid=$sno'>Delete</a></button></th>   
        </tr>";
        }
    }

?>

<!-- <tr>
    <th>1</th>
    <th>fg</th>
    <th>12</th>
    <th>5</th>
</tr>
<tr>
    <th>2</th>
    <th>rgf</th>
    <th>12</th>
    <th>12</th>
</tr> -->

   
</table>
</body>
</html>