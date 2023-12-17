<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Donate Now</title>
</head>

<body>
    <header>
    <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <img src="Capture.png" alt="Your Logo">
                    </div>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="climate-data.php">Climate Data</a></li>
                        <li><a href="weather.php">Weather</a></li>
                        <li><a href="#support">Support</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <button id="logoutButton">Logout</button>
                </nav>
            </div>
        </header>
    </header>
    <h2>Eco Crisis.</h2>
    <div class="container">
        
        <form id="donationForm" class="donation-form">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="amount">Donation Amount ($):</label>
            <input type="number" id="amount" name="amount" required>

            <label for="ngoList">Donating Towards:</label>
            <select id="ngoList" name="ngoList">
                <option value="ngo1">Social Impact</option>
                <option value="ngo2">Humanitarian Aid</option>
                <option value="ngo3">Health and Medical Research</option>
                <option value="ngo3">Education</option>
                <option value="ngo3">Disaster Relief</option>
                <option value="ngo3">Animal Welfare</option>
                <option value="ngo3">Environmental Conservation</option>
                <option value="ngo3">Community Development</option>
                <option value="ngo1">Others</option>
                <!-- Add more NGO options as needed -->
            </select>
                <label for="paymentMethod">Payment Method:</label>
            <select id="paymentMethod" name="paymentMethod">
                <option value="bkash">BKASH</option>
                <option value="nagad">NAGAD</option>
                <option value="creditCard">Credit Card</option>
            </select>

            <!-- Additional input fields based on the selected payment method -->
            <div id="bkashDetails" class="payment-details">
                <label for="bkashNumber">BKASH Number:</label>
                <input type="numbers" id="bkashNumber" name="bkashNumber" pattern="[0-9]+" title="Only numbers are allowed" required>
            </div>

            <div id="nagadDetails" class="payment-details">
                <label for="nagadNumber">NAGAD Number:</label>
                <input type="numbers" id="nagadNumber" name="nagadNumber" pattern="[0-9]+" title="Only numbers are allowed" required>
            </div>

            <div id="creditCardDetails" class="payment-details">
                <label for="creditCardNumber">Credit Card Number:</label>
                <input type="numbers" id="creditCardNumber" name="creditCardNumber" pattern="[0-9]+" title="Only numbers are allowed" required>
            </div>
            <button type="submit" class="cta-button">Submit Donation</button>
        </form>

        <!-- NGO List -->
        <div class="ngo-list">
            <h3>Top NGOs</h3>
            <ul>
                <li>
                    <img src="ngo1.png" alt="NGO 1 Logo">
                    <p>BRAC</p>
                </li>
                <li>
                    <img src="ngo2.jpg" alt="NGO 2 Logo">
                    <p>Grameen Bank</p>
                </li>
                <li>
                    <img src="ngo3.jpg" alt="NGO 3 Logo">
                    <p>ASA Foundation</p>
                </li>
            </ul>
        </div>
    </div>
    
    <script src="script.js"></script>
</body>

</html>
