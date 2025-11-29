<?php
include "includes/db.php";  ?>
<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM emp WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if($row = mysqli_fetch_assoc($result)){
        $sr = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
    }else{
        echo "no emp found";
    }
}else{
    echo "invalied request";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="http://localhost/PANKAJ/Emp-detail/css/style.css">
</head>
<body>
    <div class="view">
    <h2><?php echo $name;?> </h2>
    <p>Sr.no : <?php echo $sr;?> </p>
    <p>Email  : <?php echo $email;?> </p>
    <p>Mobil no : <?php echo $phone;?> </p>
    <p>Address : <?php echo $address;?> </p>
    <a class="update-btn" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
    <button onclick="window.location.href='index.php'" class="back-btn">Back</button>
    
</div>
</body>
</html>





