<?php include "db1.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h2>Add Students</h2>
    <a href="view.php">View Student List</a>

    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Course: <input type="text" name="course" required><br><br>
        <button type="submit" name="save">Save</button>
    </form>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, course) VALUES ('$name', '$course')";

    mysqli_query($conn, $sql);

    header("Location: add.php");
    exit();
}
?>
</body>
</html>