<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Enquiry Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #add8e6; /* Light blue background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input,
        textarea,
        select,
        option {
            display: block;
            width: 95%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #001f3f; /* Dark blue button */
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #003366; /* Darker blue on hover */
        }
    </style>
    <script>
        function selectCityAndDealers() {
            var state = document.getElementById("state").value;
            var city = document.getElementById("city");
            var dealer = document.getElementById("dealer");

            // Clear existing options
            city.innerHTML = "";
            

            // Add new options based on selected state
            if (state === "Kerala") {
                var option1 = document.createElement("option");
                option1.text = "Adoor";
                city.add(option1);

                var option2 = document.createElement("option");
                option2.text = "Alappuzha";
                city.add(option2);

                var option3 = document.createElement("option");
                option3.text = "Angamaly";
                city.add(option3);

                var option4 = document.createElement("option");
                option4.text = "Baluserry";
                city.add(option4);

                var option5 = document.createElement("option");
                option5.text = "Calicut";
                city.add(option5);

                var option6 = document.createElement("option");
                option6.text = "Chenganur";
                city.add(option6);

                var option7 = document.createElement("option");
                option7.text = "Cherpulaserry";
                city.add(option7);

                var option8 = document.createElement("option");
                option8.text = "Cheruvathur";
                city.add(option8);

               

                var option10 = document.createElement("option");
                option10.text = "Edappal";
                city.add(option10);

                var option11 = document.createElement("option");
                option11.text = "Idukki";
                city.add(option11);

                var option12 = document.createElement("option");
                option12.text = "Kallachi";
                city.add(option12);

                var option13 = document.createElement("option");
                option13.text = "Kanhanagod";
                city.add(option13);

                var option14 = document.createElement("option");
                option14.text = "Kanjirapilly";
                city.add(option14);

                var option15 = document.createElement("option");
                option15.text = "Kannur";
                city.add(option15);

                var option16 = document.createElement("option");
                option16.text = "Kasargod";
                city.add(option16);

                var option17 = document.createElement("option");
                option17.text = "Kattakada";
                city.add(option17);

                var option18 = document.createElement("option");
                option18.text = "Kayamkulam";
                city.add(option18);

                var option9 = document.createElement("option");
                option9.text = "Kochi";
                city.add(option9);

                var option19 = document.createElement("option");
                option19.text = "Kolenchery";
                city.add(option19);

                var option20 = document.createElement("option");
                option20.text = "Kollam";
                city.add(option20);

                var option21 = document.createElement("option");
                option21.text = "Kommady";
                city.add(option21);

                var option22 = document.createElement("option");
                option22.text = "Kuthattukullam";
                city.add(option22);

                var option23 = document.createElement("option");
                option23.text = "Kothamangalam";
                city.add(option23);

                var option24 = document.createElement("option");
                option24.text = "Kottakal";
                city.add(option24);

                var option25 = document.createElement("option");
                option25.text = "Kottarakkara";
                city.add(option25);

                var option26 = document.createElement("option");
                option26.text = "Kottayam";
                city.add(option26);

                var option27 = document.createElement("option");
                option27.text = "Koyilandy";
                city.add(option27);

                var option28 = document.createElement("option");
                option28.text = "Kozhikode";
                city.add(option28);

                var option29 = document.createElement("option");
                option29.text = "Kunamangalam";
                city.add(option29);

                var option30 = document.createElement("option");
                option30.text = "Kuttiady";
                city.add(option30);

                var option31 = document.createElement("option");
                option31.text = "Malappuram";
                city.add(option31);

                var option32 = document.createElement("option");
                option32.text = "Manjeri";
                city.add(option32);

                var option33 = document.createElement("option");
                option33.text = "Mannarkkad";
                city.add(option33);

                var option34 = document.createElement("option");
                option34.text = "Mavelikkara";
                city.add(option34);

                var option35 = document.createElement("option");
                option35.text = "Mukkam";
                city.add(option35);

                var option36 = document.createElement("option");
                option36.text = "Muvattupuzha";
                city.add(option36);

                var option37 = document.createElement("option");
                option37.text = "Nilambur";
                city.add(option37);

                var option38 = document.createElement("option");
                option38.text = "Ottapalam";
                city.add(option38);

                var option39 = document.createElement("option");
                option39.text = "Pala";
                city.add(option39);

                var option40 = document.createElement("option");
                option40.text = "Palakkad";
                city.add(option40);

                var option41 = document.createElement("option");
                option41.text = "Paravur";
                city.add(option41);

                var option42 = document.createElement("option");
                option42.text = "Pathanamthitta";
                city.add(option42);

                var option43 = document.createElement("option");
                option43.text = "Pattambi";
                city.add(option43);

                var option44 = document.createElement("option");
                option44.text = "Payyanur";
                city.add(option44);

                var option45 = document.createElement("option");
                option45.text = "Perambara";
                city.add(option45);

                var option46 = document.createElement("option");
                option46.text = "Perumbavoor";
                city.add(option46);

                var option47 = document.createElement("option");
                option47.text = "Thamaraserry";
                city.add(option47);

                var option48 = document.createElement("option");
                option48.text = "Thengana";
                city.add(option48);

                var option49 = document.createElement("option");
                option49.text = "Thoppumpady";
                city.add(option49);

                var option50 = document.createElement("option");
                option50.text = "Thrissur";
                city.add(option50);

                var option51 = document.createElement("option");
                option51.text = "Tirur";
                city.add(option51);

                var option52 = document.createElement("option");
                option52.text = "Thiruvalla";
                city.add(option52);

                var option53 = document.createElement("option");
                option53.text = "Thripunithra";
                city.add(option53);

                var option54 = document.createElement("option");
                option54.text = "Trivandrum";
                city.add(option54);

                var option55 = document.createElement("option");
                option55.text = "Uppala";
                city.add(option55);

                var option56 = document.createElement("option");
                option56.text = "Vadakara";
                city.add(option56);

                var option57 = document.createElement("option");
                option57.text = "Vaikom";
                city.add(option57);

                var option58 = document.createElement("option");
                option58.text = "Valanchery";
                city.add(option58);

                var option59 = document.createElement("option");
                option59.text = "Varkala";
                city.add(option59);

                var option60 = document.createElement("option");
                option60.text = "Wayanad";
                city.add(option60);

                var option61 = document.createElement("option");
                option61.text = "Others/Not Available";
                city.add(option61);



            } else if (state === "Tamil Nadu") {
                var option3 = document.createElement("option");
                option3.text = "Chennai";
                city.add(option3);
            }
                
                
        }
        function selectDealers() {
           
            var city = document.getElementById("city").value;
            dealer.innerHTML = "";
            if(city==="Kochi"){
                // Add dealers for Kochi
                var dealerOption1 = document.createElement("option");
                dealerOption1.text = "Dealer 1 - Kochi";
                dealer.add(dealerOption1);

                var dealerOption2 = document.createElement("option");
                dealerOption2.text = "Dealer 2 - Kochi";
                dealer.add(dealerOption2);
            }
            else if(city==="Trivandrum"){
                 // Add dealers for Thiruvananthapuram
                 var dealerOption1 = document.createElement("option");
                dealerOption1.text = "Dealer 1 - Trivandrum";
                dealer.add(dealerOption1);

                var dealerOption2 = document.createElement("option");
                dealerOption2.text = "Dealer 2 - Chemmai";
                dealer.add(dealerOption2);
            }
               
            
            // Add more states, cities, and dealers as needed
            
        }

    </script>

</head>

<body>
    <a href="javascript:history.back()" style="position: fixed; top: 10px; left: 10px;">
        <i class="fa fa-arrow-left"><img src="IMAGES\back.png" style="height: 30px;"></i>
    </a>
    <h1>CONTACT US</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile">
        <label for="model">Car Model:</label>
        <select id="model" name="model" required>
            <option value="Model1">Model 1</option>
            <option value="Model2">Model 2</option>
            <!-- Add more options as needed -->
        </select>
        <label for="state">State:</label>
        <select id="state" name="state" onchange="selectCityAndDealers()" required>
            <option value="Select" selected>Select State</option>
            <option value = "Andhra Pradesh">Andhra Pradesh</option>
            <option value = "Arunachal Pradesh">Arunachal Pradesh</option>
            <option value = "Assam">Assam</option>
            <option value = "Bihar">Bihar</option>
            <option value = "Chhattisgarh">Chhattisgarh</option>
            <option value = "Goa">Goa</option>
            <option value = "Gujarat">Gujarat</option>
            <option value = "Haryana">Haryana</option>
            <option value = "Himachal Pradesh">Himachal Pradesh</option>
            <option value = "Jharkhand">Jharkhand</option>
            <option value = "Karnataka">Karnataka</option>
            <option value = "Kerala">Kerala</option>
            <option value = "Madhya Pradesh">Madhya Pradesh</option>
            <option value = "Maharashtra">Maharastra</option>
            <option value = "Manipur">Manipur</option>
            <option value = "Meghalaya">Meghalaya</option>
            <option value = "Mizoram">Mizoram</option>
            <option value = "Nagaland">Nagaland</option>
            <option value = "Odisha">Odisha</option>
            <option value = "Punjab">Punjab</option>
            <option value = "Rajasthan">Rajasthan</option>
            <option value = "Sikkim">Sikkim</option>
            <option value = "Tamil Nadu">Tamil Nadu</option>
            <option value = "Telangana">Telengana</option>
            <option value = "Tripura">Tripura</option>
            <option value = "Uttar Pradesh">Uttar Pradesh</option>
            <option value = "Uttarakhand">Uttarakhand</option>
            <option value = "West Bengal">West Bengal</option>
        </select><br><br>

        <label for="city">City:</label>
        <select id="city" name="city" onchange="selectDealers()" required>
            <option value=" ">Select City</option>
            <!-- Cities will be populated dynamically based on the selected state -->
        </select><br><br>

        <label for="dealer">Dealer:</label>
        <select id="dealer" name="dealer" required>
            <option value=" ">Select Dealer</option>
            <!-- Dealers will be populated dynamically based on the selected city -->
        </select><br><br>    

        <label for="message">Comments:</label>
        <textarea id="message" name="message" rows="4" cols="50"></textarea>

        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hyundai";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
    $model = mysqli_real_escape_string($conn, $_POST["model"]);
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $dealer = mysqli_real_escape_string($conn, $_POST["dealer"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);

    // Check for duplicate entry based on email
    $duplicateCheckQuery = "SELECT * FROM `enquiry_tb` WHERE `email` = '$email'";
    $duplicateCheckResult = mysqli_query($conn, $duplicateCheckQuery);

    if (mysqli_num_rows($duplicateCheckResult) > 0) {
        echo "Error: Duplicate entry found. Your enquiry has already been submitted.";
    } else {
        // Insert data into the 'enquiry_tb' table excluding cust_id
        $sql = "INSERT INTO `enquiry_tb` (`name`, `email`, `mobile`, `model`, `state`, `city`, `dealer`, `message`) VALUES ('$name', '$email', '$mobile', '$model', '$state', '$city', '$dealer', '$message')";

        if (mysqli_query($conn, $sql)) {
            echo "Enquiry submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>



        