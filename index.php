<?php
include 'includes/db.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMP- detail</title>
   <link rel="stylesheet" href="http://localhost/PANKAJ/Emp-detail/css/style.css">
</head>

<body>

    <h2>Employee Details</h2>

    <a href="add.php" class="add-btn"> Add New Employee</a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Emp Name</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
           <tbody>
    <?php
        $sql = "SELECT * FROM emp";
        $result = $conn->query($sql);

        $sr = 1;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$sr++."</td>
                        <td>".$row['name']."</td>

                        <td><a href='view.php?id=".$row['id']."'>View</a></td>
                        <td><a href='delete.php?id=".$row['id']."'
                               onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No employees found</td></tr>";
        }
    ?>
</tbody>

        </tbody>
    </table>
 
</body>
</html>
