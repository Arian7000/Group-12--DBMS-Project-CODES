
<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(trim($_POST['loginUsername'])) && !empty(trim($_POST['loginPassword']))) {
        $username = mysqli_real_escape_string($con, $_POST['loginUsername']);
        $password = mysqli_real_escape_string($con, $_POST['loginPassword']);

        $login_query = "SELECT * FROM user WHERE UserID='$username' AND Password='$password' LIMIT 1";
        $login_result = mysqli_query($con, $login_query);
        
        if (mysqli_num_rows($login_result) > 0) {
            
            
            // Check if the user is verified
             // Redirect to the dashboard
             echo "Entered";
             header("Location: donate.php");
             exit(0);
             
            
        }     
        else{
            echo " problem is here";
        }  

               
           
    } else {
        $_SESSION['status'] = "Email and Password are mandatory fields";
        header("Location: New.php");
        exit(0);
    }
}
?>


