<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];


 
    // Hash the password for security
    

    // Insert data into the database
    $sql = "INSERT INTO User (UserID, Email, LastName, Password) VALUES ('$username', '$email', '$fullName', '$password')";

    $result=mysqli_query($con,$sql);
            if($result){
                $success=1;
            }
            else{
                echo "FAil";
                die(mysqli_error($con));
            }

    // Close the database connection
    $con->close();
}
?>