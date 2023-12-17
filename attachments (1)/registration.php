<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration</title>
</head>

<body>
    <div id="registrationPage" class="registration-page">
        <div class="registration-container">
            <h2>Register Now</h2>
            <form id="registrationForm" class="registration-form" action="process_form.php" method="post">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <!-- Add more fields as needed -->

                <button id="registerButton" type="submit" class="cta-button">Register</button>
            </form>
        </div>
    </div>
    <style type="styles/css"></style>
</body>

</html>
