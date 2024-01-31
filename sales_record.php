<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        table {
  border-collapse: collapse;
  width: 100%;
  margin: 10px 0;
  background-color: #fff;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  
  vertical-align: top;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
  color: #333;
}
        
        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }
        
        .sidebar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        .sidebar li a {
            display: block;
            color: #fff;
            padding: 10px;
            text-decoration: none;
        }
        
        .sidebar li a:hover {
            background-color: #555;
        }
        
        .content {
            margin-left: 200px;
            padding: 20px;
        }
        
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 20px;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        /* Form fields */
        
        .form-container input[type=text],
        .form-container input[type=email],
        .form-container input[type=password],
        .form-container select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }
        /* Submit button */
        
        .form-container input[type=submit] {
            background-color: #b81b1b;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        /* Submit button on hover */
        
        .form-container input[type=submit]:hover {
            background-color: #e01e1e;
        }
        
        .dropdown-menu {
            display: none;
            /* Additional styles for appearance */
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <script>
        var links = document.querySelectorAll('.sidebar a');

        links.forEach(function(link) {
            link.addEventListener('click', function() {
                links.forEach(function(otherLink) {
                    otherLink.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="admindashboard.html">Dashboard</a></li>
            <li><a href="adminlogin.html">Login</a></li>
            <li><a href="viewenquiries.php">Enquiries</a></li>
            <li class="dropdown">
                <a href="#">Manage Co-ordinators &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="addsalescord.html">Add Sales Co-ordinator</a></li>
                    <li><a href="viewsalescord.php">View Sales Co-ordinator</a></li>
                    <!-- Add more sub-menu items if needed -->
                </ul>
            </li>
            <li><a href="reportgeneration.php">View Co-ordinators Assignments</a></li>

            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
    <table>
            <thead>
                <tr>
                    <th>Officer Id.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Branch</th>
                    <th>Local Branch</th>
                </tr>
            </thead>
            <tbody>
        
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
            $sql = "SELECT * FROM `sales_officers1`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                    while($row = $result->fetch_assoc()) {
                    // Display the data in an HTML table
                    echo "<tr>";
                    echo "<td>" . $row["so_id"] . "</td>";
                    echo "<td>" . $row["so_name"] . "</td>";
                    echo "<td>" . $row["so_email"] . "</td>";
                    echo "<td>" . $row["so_phone"] . "</td>";
                    echo "<td>" . $row["so_branch"] . "</td>";
                    echo "<td>" . $row["so_localbranch"] . "</td>";
                    echo "</tr>";
                   
                     }
                } else {
                    echo "0 results";
                    }
           ?>
        
    </div>

</html>