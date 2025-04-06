<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quintessence Hotel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #34a9c1;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 30px;
    }

    .logo img {
      height: 60px;
    }

    .menu {
      display: flex;
      gap: 30px;
    }

    .menu a {
      text-decoration: none;
      color: black;
      font-weight: 500;
    }

    .menu a.active {
      color: white;
      font-weight: bold;
    }

    .user-icon i {
      font-size: 24px;
      color: black;
    }
  </style>
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <img src="/images/logo.png" alt="Quintessence Hotel Logo">
    </div>
    <nav class="menu">
      <a href="#">Home</a>
      <a href="#">Booking</a>
      <a href="#">Services</a>
      <a href="#">About Us</a>
      <a href="#" class="active">Contact Us</a>
    </nav>
    <div class="user-icon">
      <i class="fas fa-user"></i>
    </div>
  </header>

</body>
</html>
