<?php
include_once ('connection.php');
$id = $_GET['id'];
$sql ="select * from user where sl_id='$id'";
$data =mysqli_query($connection,$sql);
$row=mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST">
        
        <input typle="text" name="id" placeholder="Enter Id"value="<?php echo $row['sl_id']; ?>"><br><br>
        <input typle="text" name="name" placeholder="Enter Your Name " value="<?php echo $row['name']; ?>"><br><br>
        <input typle="text" name="email" placeholder="Enter your Email Id" value="<?php echo $row['email']; ?>"><br><br>
        <input typle="text" name="phno" placeholder="Enter your number" value="<?php echo $row['phno']; ?>"><br><br>
        <input typle="text" name="city" placeholder="Enter Phone city" value="<?php echo $row['city']; ?>"><br><br>

        <input type="submit" name="update" value="update">
</form>
<?php
if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phno'];
    $city = $_POST['city'];
    $sql2="UPDATE user SET name='$name',email='$email',phno='$phone',city='$city' WHERE sl_id='$id'";
    $result=mysqli_query($connection,$sql2);
    if($result){
        echo 'success';
        header("location: list.php");
    }else{
        die("could not updated");
    }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>