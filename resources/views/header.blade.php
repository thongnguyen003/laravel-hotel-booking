<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Hotel Navbar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            width: 1440;
            height:144;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #43A5C1;
            padding: 10px 20px;
        }
        .logo img {
            height: 80px;
        }
        .nav-links {
            display: flex;
            list-style: none;
            gap: 50px;
        }
        .nav-links li {
            margin: 0 15px;
          
        }
        .nav-links a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: bold;
          
        }
        .nav-links a:hover, .nav-links .active {
            color: white;
        }
        .icon {
            font-size: 34px;
        }
        .logo{
            align-items:flex-start
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img class="logo" src="logo.png" alt="Hotel Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ul>
        <div class="icon">
            <i class="fa-solid fa-user"></i>
        </div>
    </nav>
</body>
</html>