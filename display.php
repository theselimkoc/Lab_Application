<?php
// Database connection details
$host = 'localhost';
$db = 'student_registration';
$user = 'root';
$password = 'IBp123.';

// Establish a database connection
$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
  die('Database connection error: ' . mysqli_connect_error());
}

// Retrieve and display student information
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<ul>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row['id'] . " - " . $row['full_name'] . " - " . $row['email'] . " - " . $row['gender'] . "</li>";
  }
  echo "</ul>";
} else {
  echo "No students registered yet.";
}

// Close the database connection
mysqli_close($conn);
?>
