<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            width: 100%;
            height:100%;
            background-color: #e5e5e5;
        }
        .footer-container {
            background-color: #d1d1d1;
            padding: 2rem;
            border-radius: 0.5rem;
            width: 100%;
        }
        .footer-container h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .footer-container input[type="email"] {
            border-radius:60px;
            padding: 0.5rem 0.5rem;
            background-color:black;
            width: 250px;
        }
        .footer-container button {
            border-radius: 0 1.5rem 1.5rem 0;
            padding: 0.5rem 1rem;
            background-color: #ffeb3b;
            border: none;
            color: black;
        }
        .footer-container p {
            margin-bottom: 0.5rem;
        }
        .footer-container .contact-info p {
            margin-bottom: 0.5rem;
        }
        .footer-container .contact-info p i {
            margin-right: 0.5rem;
        }
        .footer-container .contact-info .phone-number {
            color: #ff9800;
            font-weight: bold;
            font-size: 1.25rem;
        }
        .footer-container .footer-links h3 {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .footer-container .footer-links p {
            margin-bottom: 0.5rem;
        }
        .footer-container .follow-us {
            font-weight: bold;
            margin-top: 1rem;
        }
        .footer-container .copyright {
            margin-top: 1rem;
        }
        .footer-container .btn{
            border-radius: 60px
        }
      
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="footer-container">
            <div class="mb-4">
                <div class="d-flex justify-content-space-between align-items-center">
                <span class="">Subscribe to see secret deals prices drop the moment you sign up!</span>
                    <input class="email" type="email" placeholder="Enter your email" class="form-control">
                    <button class="btn">Subscribe</button>
                </div>
            </div>
            <div class="row text-center text-md-start">
                <div class="col-md-3 contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> 99 Tô Hiến Thành - Mỹ Khê 3 - Đà Nẵng City</p>
                    <p><i class="fas fa-envelope"></i> hhai98940@gmail.com</p>
                    <p><i class="fas fa-clock"></i> Hours: 8:00 - 17:00, Mon - Sat</p>
                    <p><i class="fas fa-phone"></i> Need help? Call us</p>
                    <p class="phone-number">84+ 334-224-700</p>
                </div>
                <div class="col-md-3 footer-links">
                    <h3>Support</h3>
                    <p>Homepage</p>
                    <p>About us</p>
                    <p>Booking</p>
                    <p>Contact us</p>
                </div>
                <div class="col-md-3 footer-links">
                    <h3>Services</h3>
                    <p>Đà Nẵng</p>
                    <p>Hà Nội</p>
                    <p>Hải Phòng</p>
                    <p>TP Hồ Chí Minh</p>
                </div>
                <div class="col-md-3 footer-links">
                    <h3>Services</h3>
                    <p>Quảng Ngãi</p>
                    <p>Hà Giang</p>
                    <p>Cao Bằng</p>
                    <p>Bến Tre</p>
                </div>
            </div>
            <div class="text-center follow-us">
                <p>Follow us</p>
            </div>
            <div class="text-center copyright">
                <p>© 2025 Travila Inc. Hello everyone.</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>