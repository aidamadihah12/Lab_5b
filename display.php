<?php

include 'check.php'; // Check if the user is logged in


$conn = new mysqli("localhost", "root", "", "Lab_5b");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT matric, name, role FROM users");

echo "<h2>Users List</h2>";
echo "<table border='1'>
<tr>
<th>Matric</th>
<th>Name</th>
<th>Level</th>
<th>Actions</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['matric']}</td>
    <td>{$row['name']}</td>
    <td>{$row['role']}</td>
    <td>
        <a href='edit.php?matric={$row['matric']}'><button>Edit</button></a>
        <a href='delete.php?matric={$row['matric']}' onclick='return confirm(\"Are you sure?\")'><button>Delete</button></a>
    </td>
    </tr>";
}

echo "</table>";
$conn->close();
?>

<p><a href='logout.php'>Logout</a></p>
