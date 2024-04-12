<?php
// Include your database connection file (config.php)
@include 'config.php';

// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
    $company_type = mysqli_real_escape_string($conn, $_POST['company_type']);
    $statement_1 = isset($_POST['statement_1']) ? 1 : 0;
    $statement_2 = isset($_POST['statement_2']) ? 1 : 0;
    $organization_description = mysqli_real_escape_string($conn, $_POST['organization_description']);
    $how_found = mysqli_real_escape_string($conn, $_POST['how_found']);
    $aitsad_discovery_method = mysqli_real_escape_string($conn, $_POST['aitsad_discovery_method']);
    $improvement_1 = isset($_POST['improvement_1']) ? 1 : 0;
    $improvement_2 = isset($_POST['improvement_2']) ? 1 : 0;

    // Insert user responses into the database table
    $sql = "INSERT INTO user_responses (name, email, usertype, company_type, company_description, how_found, statement_1, statement_2, organization_description, aitsad_discovery_method, improvement_1, improvement_2)
    VALUES ('$name', '$email', '$user_type', '$company_type', '$company_description', '$how_found', '$statement_1', '$statement_2', '$organization_description', '$aitsad_discovery_method', '$improvement_1', '$improvement_2')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to try.html
        header('location: try.html');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
