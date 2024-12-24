<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <h2>User Registration</h2>
    <form action="register_form.php" method="POST">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="" disabled selected>Please select</option>
            <option value="Student">Student</option>
            <option value="Lecturer">Lecturer</option>
        </select>

        <button type="submit">Register</button>
    </form>
    <p>Already registered? <a href="login.php">Login here</a></p>
</body>
</html>
