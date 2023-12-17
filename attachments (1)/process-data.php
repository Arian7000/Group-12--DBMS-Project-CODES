<?php
// process-data.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected division and data year
    $selectedDivision = $_POST["division"];
    $selectedDataYear = $_POST["dataYear"];

    // Redirect to another page with the selected data
    header("Location: climate-data-results.php?division=$selectedDivision&year=$selectedDataYear");
    exit();
} else {
    // Redirect to the form page if accessed directly without form submission
    header("Location: climate-data.html");
    exit();
}
?>
