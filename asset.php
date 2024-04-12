<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $assetName = $_POST['assetName'];
    $riskRating = $_POST['riskRating'];
    $assetDescription = $_POST['assetDescription'];
    $importance = $_POST['importance'];

    $sql = "INSERT INTO AssetTable (AssetName, RiskRating, AssetDescription, Importance) VALUES ('$assetName', '$riskRating', '$assetDescription', '$importance')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "SELECT * FROM AssetTable";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Asset Tag: " . $row["AssetTag"]. " - Asset Name: " . $row["AssetName"]. " - Risk Rating: " . $row["RiskRating"]. " - Asset Description: " . $row["AssetDescription"]. " - Importance: " . $row["Importance"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

mysqli_close($conn);
?>
