<?php
include "includes/db.php";

if (!isset($_GET['id'])) {
    die("Invalid !");
}

$id = $_GET['id'];


$fetch = "SELECT * FROM emp WHERE id = $id";
$result = mysqli_query($conn, $fetch);

if (mysqli_num_rows($result) == 0) {
    die("Employee not found!");
}

$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $update = "UPDATE emp SET 
                name='$name',
                email='$email',
                phone='$phone',
                address='$address'
               WHERE id = $id";

    if (mysqli_query($conn, $update)) {

        ?>
    <script type="text/javascript">
        alert("your data is upted!");
        window.location.href = "index.php"; 
    </script>
    <?php

    } else {
       ?>
    <script type="text/javascript">
        alert("Data updating failed!");
        window.location.href = "index.php"; 
        
    </script>
    <?php

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
     <link rel="stylesheet" href="http://localhost/PANKAJ/Emp-detail/css/style.css">
</head>
</head>

<body>
<div class="edit">
<h2>Edit Employee</h2>

<form method="POST">

    <label>Name:</label><br>
    <input type="text"class ="input" name="name" value="<?php echo $row['name']; ?>" required>
    <br><br>

    <label>Email:</label><br>
    <input type="email"class ="input" name="email" value="<?php echo $row['email']; ?>" required>
    <br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" class ="input"value="<?php echo $row['phone']; ?>" required>
    <br><br>

    <label>Address:</label><br>
    <textarea name="address" required><?php echo $row['address']; ?></textarea>
    <br><br>

    <button type="submit" class="update-btn"name="update">Update</button>
   <a href = "index.php" class ="back-btn">Back</a>

</form>
</div>
</body>
</html>
