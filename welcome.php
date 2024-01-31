<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Hyundai</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #001c3d; /* Dark Blue */
            color: #fff; /* White */
            margin-top: 60px; /* Adjusted margin-top to make space for fixed header */
        }

        header {
            background-color: #fff; /* White */
            color: #001c3d; /* Dark Blue */
            text-align: left;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease, width 0.3s ease; /* Added width transition */
        }

        .logo img {
            height: 30px;
        }

        h1 {
            margin: 0;
            font-size: 24px;
            color: #001c3d; /* Dark Blue */
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: #001c3d; /* Dark Blue */
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #e8491d; /* Orange */
        }

        section {
            padding: 80px 20px;
            text-align: center;
            background-color: #001c3d; /* Dark Blue */
        }

        h2 {
            color: #fff; /* White */
            margin-bottom: 30px;
        }

        form {
            max-width: 700px; /* Set max-width for better visibility */
            margin: 10px auto; /* Center the form */
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            color: #000; /* Black color for labels */
            text-align: left;

        }

        input,
        select,
        textarea {
            width: calc(80% - 20px); /* Adjusted width to make space for borders */
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float:right;
            position: bottom;
        }

        footer {
            background-color: #001c3d; /* Dark Blue */
            color: #fff; /* White */
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
            transition: background-color 0.3s ease, width 0.3s ease; /* Added width transition */
            z-index:999;
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(6, auto);
            gap: 20px;
            margin-top: 20px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #e8491d; /* Orange */
        }

        .copyright {
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="hyundai-logo.png" alt="Hyundai Logo">
            <h1>Hyundai</h1>
        </div>
        <nav>
            <a href="#">Find a Car</a>
            <a href="#">Click to Buy</a>
            <a href="#">Connect to Service</a>
            <a href="#">Hyundai Story</a>
            <a href="#">Mobility Solutions</a>
            <a href="#">Contact Us</a>
        </nav>
    </header>
    <section>
        <h2>Enquiry Form</h2>
        <form id="enquiryForm" method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Mobile:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="model">Model:</label>
    <select id="model" name="model">
        <!-- Add Hyundai car model names as options -->
        <option value="model1">Model 1</option>
        <option value="model2">Model 2</option>
        <!-- Add more options as needed -->
    </select>

    <label for="state">State:</label>
    <select id="state" name="state" onchange="populateDistricts()">
        <option value="" selected disabled>Select State</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <!-- Add more states as needed -->
        <option value="Kerala">Kerala</option>
    </select>

    <label for="city">City:</label>
    <select id="city" name="city">
        <!-- Districts will be populated dynamically based on the selected state -->
        <option value="" selected disabled>Select City</option>
    </select>

    <label for="dealer">Dealer:</label>
    <select id="dealer" name="dealer">
        <option value="" selected disabled>Select Dealer</option>
        <!-- Preferred locations will be populated dynamically based on the selected district -->
    </select>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="6" required></textarea>

    <button type="submit">Submit</button>
</form>

<script>
    // Sample JavaScript code for dynamic dropdowns
    function populateDistricts() {
        var stateSelect = document.getElementById("state");
        var districtSelect = document.getElementById("city");

        // Clear existing options
        districtSelect.innerHTML = '<option value="" selected disabled>Select District</option>';

        // Sample: Add districts based on the selected state
        if (stateSelect.value === "Kerala") {
            var districts = ["Adoor", "Alappuzha", "Angamaly", "Baluserry", "Calicut", "Chenganur", "Cherpulaserry", "Cheruvathur", "Cochin", "Edappal", "Idukki", "Kallachi", "Kanhanagod", "Kanjirapilly", "Kannur", "Kasargod", "Kattakada", "Kayamkulam", "Kolenchery", "Kollam", "Kommady", "Kuthattukullam", "Kothamangalam", "Kottakal", "Kottarakkara", "Kottayam", "Koyilandy", "Kozhikode", "Kunamangalam", "Kuttiady", "Malappuram", "Manjeri", "Mannarkkad", "Mavelikkara", "Mukkam", "Muvattupuzha", "Nilambur", "Ottapalam", "Pala", "Palakkad", "Paravur", "Pathanamthitta", "Pattambi", "Payyanur", "Perambara", "Perumbavoor", "Thamaraserry", "Thengana", "Thoppumpady", "Thrissur", "Tirur", "Thiruvalla", "Thripunithra", "Trivandrum", "Uppala", "Vadakara", "Vaikom", "Valanchery", "Varkala", "Wayanad", "Others/Not Available"];
            for (var i = 0; i < districts.length; i++) {
                var option = document.createElement("option");
                option.value = districts[i];
                option.text = districts[i];
                districtSelect.add(option);
            }
        }
    }

    function populatePreferredLocations() {
        var districtSelect = document.getElementById("city");
        var preferredLocationSelect = document.getElementById("dealer");

        // Clear existing options
        preferredLocationSelect.innerHTML = '<option value="" selected disabled>Select Preferred Location</option>';

        // Sample: Add preferred locations based on the selected district
        if (districtSelect.value === "Adoor") {
            var locations = ["Location 1", "Location 2", "Location 3"];
            for (var i = 0; i < locations.length; i++) {
                var option = document.createElement("option");
                option.value = locations[i];
                option.text = locations[i];
                preferredLocationSelect.add(option);
            }
        } else if (districtSelect.value === "Alappuzha") {
            var locations = ["Location X", "Location Y", "Location Z"];
            for (var i = 0; i < locations.length; i++) {
                var option = document.createElement("option");
                option.value = locations[i];
                option.text = locations[i];
                preferredLocationSelect.add(option);
            }
        }
        // Add more conditions for other districts as needed
    }
    </section>
    <footer>
        <div class="footer-links">
            <a href="#">Hyundai Dealership Near You</a>
            <a href="#">Find a Dealer</a>
            <a href="#">Request a Test Drive</a>
            <a href="#">Checkout Prices</a>
            <a href="#">Buy Now</a>
            <a href="#">Click To Buy</a>
        </div>
        <div class="copyright">
            &copy; 2024 Hyundai. All rights reserved.
        </div>
    </footer>
        document.getElementById("enquiryForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Handle form submission here
            alert("Form submitted!");
        });
    </script>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hyundai";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];  // Updated variable name to match the form field
    $model = $_POST['model'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $dealer = $_POST['dealer'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO enquiry_tb (name, email, mobile, model, state, city, dealer, message) VALUES ('$name', '$email', '$mobile', '$model', '$state', '$city', '$dealer', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
