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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $so_id = $_POST["officerId"];
    $so_name = $_POST["name"];
    $so_email = $_POST["email"];
    $so_phone = $_POST["phone"];
    $so_branch = $_POST["branch"];
    $so_localBranch = $_POST["localBranch"];

    // Insert data into the 'sales_officers1' table with explicit column names
    $sql = "INSERT INTO sales_officers1 (so_id, so_name, so_email, so_phone, so_branch, so_localBranch) VALUES ('$so_id', '$so_name', '$so_email', '$so_phone', '$so_branch', '$so_localBranch')";

    if (mysqli_query($conn, $sql)) {
        echo "Sales Officer added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sales Officer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light blue shade */
            text-align: left; /* Align text to the left */
            padding: 50px;
        }

        form {
            max-width: 500px;
            margin: 0; /* Remove auto margin to keep form on the left */
            background-color: #ffffff65;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input {
            display: block;
            width: 95%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #001a4d; /* Dark blue button color */
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #000033; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <h1>Add Sales Officer</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="officerId">Officer Id:</label>
        <input type="text" id="so_id" name="officerId" required>

        <label for="name">Name:</label>
        <input type="text" id="so_name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="so_email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="so_phone" name="phone" required>

        <label for="branch">Branch:</label>
        <input type="text" id="so_branch" name="branch" required>

        <label for="localBranch">Local Branch:</label>
        <input type="text" id="so_localBranch" name="localBranch" required>

        <input type="submit" value="Add Sales Officer">
    </form>
</body>
</html>
