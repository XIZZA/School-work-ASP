<?php
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $identification = $_POST['identification'];
    $containment = $_POST['containment'];
    $documentation = $_POST['documentation'];
    $analysis = $_POST['analysis'];
    $impact_assessment = $_POST['impact_assessment'];
    $response = $_POST['response'];
    $lessons_learned = $_POST['lessons_learned'];
    $reporting = $_POST['reporting'];
    $follow_up = $_POST['follow_up'];
    $continuous_improvement = $_POST['continuous_improvement'];

    // Insert data into the database
    $sql = "INSERT INTO incident (identification, containment, documentation, analysis, impact_assessment, response, lessons_learned, reporting, follow_up, continuous_improvement)
            VALUES ('$identification', '$containment', '$documentation', '$analysis', '$impact_assessment', '$response', '$lessons_learned', '$reporting', '$follow_up', '$continuous_improvement')";


    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['incident_id'])) {
    // Retrieve incident ID from the form
    $incident_id = mysqli_real_escape_string($conn, $_GET['incident_id']);

    // Retrieve data from the database based on incident ID
    $sql = "SELECT * FROM incident WHERE id = '$incident_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data in a report format
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Incident ID: " . $row["id"] . "<br>";
            echo "Identification: " . $row["identification"] . "<br>";
            echo "Containment: " . $row["containment"] . "<br>";
            echo "Documentation: " . $row["documentation"] . "<br>";
            echo "Analysis: " . $row["analysis"] . "<br>";
            echo "Impact Assessment: " . $row["impact_assessment"] . "<br>";
            echo "Response: " . $row["response"] . "<br>";
            echo "Lessons Learned: " . $row["lessons_learned"] . "<br>";
            echo "Reporting: " . $row["reporting"] . "<br>";
            echo "Follow-up: " . $row["follow_up"] . "<br>";
            echo "Continuous Improvement: " . $row["continuous_improvement"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No incident found with ID: $incident_id";
    }
}

// Close the database connection
mysqli_close($conn);
?>
