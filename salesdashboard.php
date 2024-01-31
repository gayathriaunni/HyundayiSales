<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        /* CSS for the navbar */
        
        .navbar {
            position: fixed;
            top: 0;
            left: -200px;
            height: 100%;
            width: 200px;
            background-color: #9c2323;
            color: #fff;
            padding: 30px;
            transition: all 0.3s ease-in-out;
        }
        
        .navbar.open {
            left: 0;
        }
        /* CSS for the content area */
        
        .content {
            padding: 80px;
            margin-top: 80px;
        }
        /* CSS for the menu button */
        
        .menu-button {
            position: fixed;
            top: 20px;
            left: 20px;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
        }
        
        a {
            display: block;
            color: #fff;
            padding: 10px;
            text-decoration: none;
        }
        
        .navbar li a:hover {
            background-color: #af4141;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar" id="dashboard-nav">
        <br>
        <h2>MENU</h2>
        <ul>
            <li style="list-style-type: none;"><a href="#">DASHBOARD</a></li>
            <li style="list-style-type: none;"><a href="#">MY ASSIGNMENTS</a></li>
            <li style="list-style-type: none;"><a href="#">SETTINGS</a></li>
        </ul>
    </div>
    <!-- Content area -->
    <div class="content">
        <h1>Dashboard</h1>
        <p>Welcome to your dashboard.</p>
    </div>
    <!-- Menu button -->
    <div class="menu-button" onclick="toggleNav()">
        &#9776;
    </div>
    <!-- JavaScript to handle the navbar animation -->
    <script>
        function toggleNav() {
            var navbar = document.getElementById("dashboard-nav");
            navbar.classList.toggle("open");
        }
    </script>
</body>

</html>