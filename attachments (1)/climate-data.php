<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Climate Data</title>
</head>

<body>
    <h2>Climate Data</h2>
    <div class="container">

        <form id="climateDataForm" class="climate-data-form">
            <label for="division1">Division:</label>
            <select id="division1" name="division3">
                <option value="dhaka">Dhaka</option>
                <option value="barishal">Barishal</option>
                <option value="chittagong">Chittagong</option>
                <option value="khulna">Khulna</option>
                <option value="mymensingh">Mymensingh</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="rangpur">Rangpur</option>
                <option value="sylhet">Sylhet</option>
                <!-- Add more divisions as needed -->
            </select>

            <label for="division2">Data Year:</label>
            <select id="division2" name="division2">
                <option value="2022">Climate Data 2022</option>
                <option value="2021">Climate Data 2021</option>
                <option value="2020">Climate Data 2020</option>
                <option value="2020">Climate Data 2019</option>
                <option value="2020">Climate Data 2018</option>
            </select>

               

            <button type="submit" class="cta-button">Load Data</button>
        </form>

        
        
    </div>

    <script src="script.js"></script>
</body>

</html>
