<?php
// climate-data-results.php

// Retrieve data from the database based on the selected division and year
$division = $_GET["division"];
$dataYear = $_GET["year"];

// TODO: Implement database query to fetch climate data based on $division and $dataYear
// Example: $result = mysqli_query($connection, "SELECT * FROM climate_data WHERE division='$division' AND year='$dataYear'");

// Display fetched data or perform further processing as needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Climate Data Results</title>
</head>

<body>
    <h2>Climate Data Results</h2>
    <div class="container">
        <!-- Display the fetched data or other content -->
    </div>

    <script src="script.js"></script>
</body>

</html>
