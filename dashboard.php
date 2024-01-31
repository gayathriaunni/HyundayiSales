<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
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
            <li><a href="adminlogin.php">Login</a></li>
            <li class="dropdown">
            <a href="#">Enquiries &#9662;</a>
            <ul class="dropdown-menu">
                <li><a href="view_customers.php">View Enquiries</a></li>
            </ul>
        </li>
            <li class="dropdown">
                <a href="#">Manage Sales Officers &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="add_salesofficers.php">Add Sales Officer</a></li>
                    <li><a href="view_salesofficers.php">View Sales Officers</a></li>
                    <!-- Add more sub-menu items if needed -->
                </ul>
            </li>
            <li><a href="reportgeneration.php">View Co-ordinators Assignments</a></li>

            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>WELCOME ADMIN</h1>

    </div>

</html>