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

// Fetch all sales officers from the 'sales_officers1' table
$sql = "SELECT * FROM sales_officers1";
$result = mysqli_query($conn, $sql);

// Handle any potential errors
if (!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Sales Officers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff; /* Light blue shade */
            text-align: center;
            padding: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #001a4d; /* Dark blue header color */
            color: white;
        }

        button {
            background-color: #001a4d; /* Dark blue button color */
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #000033; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <h1>View Sales Officers</h1>

    <!-- Table to display sales officers -->
    <table>
        <thead>
            <tr>
                <th>Officer Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Branch</th>
                <th>Local Branch</th>
                <th>Assigned Customers</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through each row of the result set
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['so_id']}</td>";
                echo "<td>{$row['so_name']}</td>";
                echo "<td>{$row['so_email']}</td>";
                echo "<td>{$row['so_phone']}</td>";
                echo "<td>{$row['so_branch']}</td>";
                echo "<td>{$row['so_localbranch']}</td>";
                echo "<td><!-- Display assigned customers here --></td>";
                echo "<td><button onclick=\"assignCustomers('{$row['so_id']}')\">Assign</button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
        // JavaScript function to handle the "Assign" button click
        function assignCustomers(officerId) {
            // Redirect to the view_customers.php page with the officerId parameter
            window.location.href = 'view_customers.php?officerId=' + officerId;
        }
    </script>
</body>
</html>
