
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
$sql = "SELECT * FROM enquiry_tb";
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
    <title>View Customers</title>
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
            background-color: #001a4d; /* Deep blue color */
            color: white; /* Text color */
            padding: 10px 20px; /* Padding around text */
            font-size: 16px; /* Font size */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Cursor style */
            }

            /* CSS for hover effect */
            button:hover {
            background-color: #001a4d; /* Darker blue on hover */
            }
    </style>
</head>
<body>
    <h1>View Customers Assigned to Sales Officer</h1>

    <!-- Table to display customers -->
    <table>
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Model</th>
                <th>State</th>
                <th>City</th>
                <th>Delete</th>
                <th>Assign</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through each row of the result set
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['cust_id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['mobile']}</td>";
                echo "<td>{$row['model']}</td>";
                echo "<td>{$row['state']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td><button onclick=\"window.location.href='delete_enquiry.php?id={$row['cust_id']}'\">Delete</button></td>";
                echo "<td><button>Assign</button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
