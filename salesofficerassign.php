<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hyundai";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$so_id = $_SESSION["so_id"]; // Assuming you store the sales officer's ID in session

// Fetch sales officer's dealership details
$sql_dealership = "SELECT `so_localbranch` FROM `salesofficer_assign` WHERE `so_id`= '$so_id'";
$result_dealership = $conn->query($sql_dealership);

if ($result_dealership->num_rows > 0) 
{
    $row_dealership = $result_dealership->fetch_assoc();
    $dealer = $row_dealership["so_localbranch"];

    // Fetch customer details based on dealership
    $sql_customers = "SELECT * FROM `assignment_tb` WHERE `dealer`='$dealer'";
    $result_customers = $conn->query($sql_customers);

    if ($result_customers->num_rows > 0) 
    {
        echo "<table>";
        echo "<thead>
            <tr>
                <th>Cust_id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Model</th>
                <th>State</th>
                <th>City</th>
                <th>Message</th>
                <th>Update Status</th>
                <th>Actions</th>
            </tr>
        </thead>";
        echo "<tbody>";

        while ($row = $result_customers->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["slno"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["mobile"] . "</td>";
            echo "<td>" . $row["model"] . "</td>";
            echo "<td>" . $row["state"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td><a href='sethot.php?slno=" . $row["cust_id"] . "'>Hot</a> | <a href='setwarm.php?slno=" . $row["slno"] . "'>Warm</a> | <a href='setcold.php?slno=" . $row["slno"] . "'>Cold</a></td>";
            echo "<td>
                    <a href='clientdata.php?slno=" . $row["cust_id"] . "'>Show Client Data</a> |
                    <a href='callback.php?slno=" . $row["cust_id"] . "'>Schedule Callback</a> |
                    <a href='junk.php?slno=" . $row["cust_id"] . "'>Mark as Junk</a> |
                    <a href='bookingdone.php?slno=" . $row["cust_id"] . "'>Booking Done</a>
                </td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
} 
else 
{
    echo "Error fetching dealership";
}
$conn->close();
?>
