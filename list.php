<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="list.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        table{
            width: 100%;
        }
        #flex{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
    </style>
    
</head>
<body>
    <center>
    <?php
    include_once('connection.php'); 
    
    $sql = "SELECT * FROM user";
    $data=mysqli_query($connection,$sql);
    $total=mysqli_num_rows($data);

   // $data = mysqli_query($conn,$sql);

   // $total = mysqli_num_rows($data);

    if($total){
        ?>
    <table border="1">
        <th id="flex">

        
        
            <h3>Manager Users</h3>
        
            <div class="flex">
            <button type="button" style="background-color:green">Add</button>
            <button type="button" style="background-color:red">Delete</button>

            </div>    </th></table>
            <table border="2">
            <tr>
                
                
                <th>
                    slno
                </th>
                <th>
                name
                </th>
                <th>
                    email
                </th>
                <th>
                    phonenumber
                </th>
                <th>
                    city
                </th>
                 <th colspan="2">options

                </th>
               
            </tr>
            <?php
            while($result = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td>
                        <?php echo $result['sl_id'];?>
                    </td>
                    <td>
                        <?php echo $result['name'];?>
                    </td>
                    <td>
                        <?php echo $result['email'];?>
                    </td>
                    <td>
                        <?php echo $result['phno'];?>
                    </td>
                    <td>
                        <?php echo $result['city'];?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $result['sl_id']; ?>"><span class="material-symbols-outlined">
edit
</span></a>
                        
                    </td>
                    <td>
                    <a href="delete.php?id=<?php echo $result['sl_id']; ?>"><span class="material-symbols-outlined">
delete
</span></a>
                    </td>
                    
                

                </tr>
                <?php
            }
    
    }else{
        echo "no records found";
    }
    ?>
    </center>

</body>
</html>
