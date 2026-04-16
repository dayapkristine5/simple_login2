<?php include "db1.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h2>Student List</h2>
    <a href="add.php">Add Students</a><br><br>

    <table border="1" cellpadding="10">
        <tr> 
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Action</th> 
        </tr> 

<?php
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr> 
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
<?php
}
?>

    </table> 
</body>
</html>