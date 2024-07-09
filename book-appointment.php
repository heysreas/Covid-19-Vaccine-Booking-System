<!-- book-appointment.php -->
<?php
// Include database connection
require_once('connect.php');

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    // Validate and sanitize inputs (for security)
    $name = htmlspecialchars(trim($name));
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // Additional validation can be added

    // Insert appointment into database
    $query = "INSERT INTO appointments (name, email, date) VALUES ('$name', '$email', '$date')";

    if (mysqli_query($conn, $query)) {
        echo "Appointment booked successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
