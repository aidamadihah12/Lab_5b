<?php

include 'check.php'; // Include session check at the top


$conn = new mysqli("localhost", "root", "", "Lab_5b");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['matric'])) {
    $matric = $_GET['matric'];
    $result = $conn->query("SELECT * FROM users WHERE matric = '$matric'");
    $row = $result->fetch_assoc();
} else {
    header("Location: display.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
</head>
<body>
    <h2>Edit </h2>
    <form action="edit.php" method="POST">
    <label for="name">Matric:</label>
        <input type="text" name="matric" value="<?php echo $row['matric']; ?>"><br>

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

        <label for="role">Access Level:</label>
        <select name="role" required>
            <option value="Student" <?php echo $row['role'] == 'Student' ? 'selected' : ''; ?>>Student</option>
            <option value="Lecturer" <?php echo $row['role'] == 'Lecturer' ? 'selected' : ''; ?>>Lecturer</option>
        </select><br>

        <button type="submit">Edit</button>
    </form>
    <p><a href="display.php">List</a></p>
</body>
</html>

<?php
$conn->close();
?>
