
<?php
include "includes/db.php";  

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if ($name != "" && $email != "" && $phone != "" && $address != "") {

        $query = "INSERT INTO emp (name, email, phone, address)
                  VALUES ('$name', '$email', '$phone', '$address')";

        $data = mysqli_query($conn, $query);

        if ($data) {
        ?>
    <script type="text/javascript">
        alert("Data saved successfully!");
        window.location.href = "index.php";
    
    </script>
    <?php

           

        } else {
            ?>
    <script type="text/javascript">
        alert("fail to save data!");
        window.location.href = "index.php";
        
    </script>
    <?php

        }

    } else {
        echo "Please fill all the fields!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <h2>Add New Employee</h2>

    <form action="" method="POST" class="emp-form">

        <label>Name:</label><br>
        <input type="text" name="name" class ="input" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" class ="input"required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" class ="input"required><br><br>

        <label>Address:</label><br>
        <textarea name="address" rows="4" required></textarea><br><br>

        <button type="submit" name="save" id="save">Save Employee</button>
        <a href="index.php" class ="back-btn">Back</a>

    </form>
</div>
</body>
</html>
