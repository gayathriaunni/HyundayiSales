<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="hyundai";
    
    $conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    // Get ID of the row to delete
    session_start();
    $cust_id=$_SESSION["cust_id"];

    if(isset($_SESSION["cust_id"])){
        echo $slno;
    }
    else{
        echo "adsz";
    }

    // Delete the row from the database
    $sql = "DELETE FROM `enquiry_tb` WHERE `cust_id` = '$cust_id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('DELETED SUCCESSFULLY!');
        document.location='view_customers.php'</script>";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
?>

