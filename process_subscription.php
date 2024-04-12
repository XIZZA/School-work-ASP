<?php
require 'config.php';

$email = $_POST['email'];

$select = "SELECT * FROM mailing_list WHERE email = ?";
$stmt = $conn->prepare($select);
$stmt->bind_param("s", $email);
$stmt->execute();

if ($stmt->num_rows > 0) {
    echo "Email already exists in the mailing list!<br>";
} else {
    $insert = "INSERT INTO mailing_list (email) VALUES (?)";
    $stmt = $conn->prepare($insert);
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        echo "Subscription successfully added.<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

$conn->close();
?>

<a href="mailing_list.php">View Mailing List</a>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>