<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    

    <title>Eco Crisis.</title>
</head>

<body>
    <div id="loginPage" class="login-page">
        <div class="login-container">
            <h2>Login or Register</h2>
            <form id="loginForm" class="login-form" action="login_form.php" method="post">
                <!-- Your form fields -->
                <label for="loginUsername">Username:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
                <br>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <br>
                <button type="submit" class="cta-button">Login</button>
            </form>

            <p>Don't have an account? <a href="registration.php">Register Now</a>  <br> <a href="#" id="viewAsGuest">View as Guest</a></p>

            
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>