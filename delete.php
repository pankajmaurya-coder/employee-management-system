<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <td>
    <a class='delete' 
       href='delete.php?id=<?php echo $row["id"]; ?>' 
       onclick='return confirm("Are you sure?")'>
       Delete
    </a>
</td>
</table>
</body>
</html>

<?php
include "includes/db.php";

if (!isset($_GET['id']) || $_GET['id'] == "") {
    die("Invalid request!");
}

$id = $_GET['id'];

$query = "DELETE FROM emp WHERE id = $id";

if (mysqli_query($conn, $query)) {

    ?>
    <script type="text/javascript">
        alert("data was deleted succesfully!");
        window.location.href = "index.php";
        
    </script>
    <?php

} else {
    echo "Failed to delete!";
}
?>
