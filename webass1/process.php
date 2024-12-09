<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $message = htmlspecialchars($_POST['message']);

    // Validate the input
    if (empty($name) || empty($email) || empty($phone) || empty($dob) || empty($gender)) {
        echo "<p style='color: red;'>All fields except the message are required.</p>";
        exit;
    }

    // Display the submitted data with styling
    echo "
    <h2>Registration Successful!</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Date of Birth:</strong> $dob</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Message:</strong> $message</p>
    ";
} else {
    echo "<p style='color: red;'>Invalid request method!</p>";
}
?>