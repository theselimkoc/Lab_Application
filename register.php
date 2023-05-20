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

// Form data validation
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

if (empty($full_name) || empty($email) || empty($gender)) {
  echo "Error: All fields are required.";
} else {
  // Prepare and execute the database query
  $query = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Success: Student registered successfully.";
  } else {
    echo "Error: Failed to register student.";
  }
}

// Close the database connection
mysqli_close($conn);
?>
