<?php
include_once('connection.php');
if(isset($_POST['ok']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phno'];
    $city = $_POST['city'];
   
    $sql = "INSERT INTO user (name, email, phno, city) VALUES ('$name', '$email', '$phone', '$city')";

    $result = mysqli_query($connection, $sql);

    if($result){
        echo 'inserted';
    } else {
        echo 'error';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <th>
    <h1>Manager Users</h1>
    
    <table>
        <form action="" method="POST">
            <tr>
                <td>slno</td>
                <td><input type="number" name="" value=""></td>
</tr>
<tr>
    <td>Name</td>
    <td><input type="text" name="name"  value=""></td>
</tr>
<tr>
    <td>Email</td>
    <td><input type="text" name="email" value=""></td>
</tr>
<tr>
    <td>Phone number</td>
    <td><input type="number" name="phno" value=""></td>
</tr>
<tr>
    <td>City</td>
    <td><input type="text" name="city" value=""></td>
</tr>
<tr>
    
    <td><input type="submit" name="ok" value="submit"></td>
</th>
</tr>
</table>
</form>
</body>
</html>