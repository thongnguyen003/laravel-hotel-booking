<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
  body {
    font-family: sans-serif;
    width: 100vw;
    height: 100vh;
  }
  .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
  }
  .header {
    text-align: center;
    padding: 20px;
    background-color: #f0f0f0;
  }
  .header h1 {
    font-size: 2em;
    margin-bottom: 20px;
    font-weight:bold
  }
  .search-bar {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .date-input, .adults-input {
    display: flex;
    flex-direction: column;
    margin: 0 10px;
  }

  .date-input span, .adults-input span {
    font-size: 0.9em;
    margin-bottom: 5px;
    color: #341919;
  }

  .date-input input, .adults-input select {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  .search-bar{
    /* background-color: #007bff; */
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  .btn{
      border-radius:20px !important;
      background-color:#808080 !important;
  }
  .featured-rooms h2{
    margin-bottom: 10px;
  }
  .big-rooms h2, .big-rooms p{
      margin-left:30px
  }
  .featured-rooms p, .big-rooms p {
    color: #888;
    margin-bottom: 30px;
  }
  .featured-rooms ,.big-rooms{
    padding: 20px;
  
  }

  .room-list {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    
  }
  .room-item {
      position: relative;
      width: 300px;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      margin-bottom: 20px;
      box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.3);
  }
  .room-image img {
    width: 100%;
    height: auto;
  }

  .room-details {
      border:30px !important;
      padding:20px;
      border-radius: 40px!important
  }

  .room-details h3 {
    font-size: 1.2em;
    margin-bottom: 10px;
    font-weight: bold;
  }

  .room-details p {
    margin-bottom: 5px;
    color: #555;
  }

  .room-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
  }

  .room-price span {
    font-weight: bold;
    color: black;
  }

  .room-price button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  .room-type h2{
    margin-left:30px;
    margin-top:30px;
    font-weight:bold;
    margin-bottom: 60px;
  }

  .fa-clock, .fa-user {
    margin-right: 5px;
  }
  .icon{
      display:flex; 
      gap:10px
  }
  #carouselExample {
      max-width: 1200px; 
      margin: 0 auto; 
  }

  #carouselExample img {
      max-height: 700px !important; 
      object-fit: cover; 
  }

  .carousel-control-prev,
  .carousel-control-next {
      width: auto; 
      position: absolute; 
      top: 50% !important;
      transform: translateY(-50%) !important;
  }
  .carousel-control-prev {
      left: 10px; 
  }
  .carousel-control-next {
      right: 10px; 
  }
  .icon-big{
      display:flex;
  }
  img {
    height: 250px !important;            
    object-fit: cover;       
    width: 100%;              
    border-radius: 12px;   
  }

  .carousel {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2); /* Đổ bóng */
    border-radius: 12px;
    overflow: hidden;
  }
  .carousel-item {
    position: relative;
  }

  .carousel-caption-custom {
    position: absolute;
    bottom: 40px;
    left: 15px;
    color: white;
    font-size: 1.5rem;
    background-color: rgba(0, 0, 0, 0.5); /* nền mờ để dễ đọc */
    padding: 8px 16px;
    border-radius: 8px;
  }
  .banner{
    height:400px
  }
  .banner img{
    width: 300px;
    height:400px !important;
    object-fit: cover;
  }
</style>
</style>
<body>
  <div class="container">
    <div id="carouselExample" class="carousel">
        <div class="carousel-inner banner">
            <div class="carousel-item active banner">
                <img src="./images/roomTypes/khach-san-cao-cap2.jpg" class="d-block w-100 ">
            </div>
            <div class="carousel-item">
                <img src="./images/roomTypes/phong-vip2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./images/roomTypes/khach-san-cao-cap1.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <div class="header">
      <h1>MY HOMEPAGE IN WEBSITE</h1>
      <div class="search-bar">
        <div class="date-input">
          <span>Check In</span>
          <input type="date" value="2024-01-02">
        </div>
        <div class="date-input">
          <span>Check Out</span>
          <input type="date" value="2024-01-02">
        </div>
        <div class="adults-input">
          <span>Room Type</span>
          <select>
            <option value="1">Phòng vip</option>
            <option value="2">phòng thường</option>
            <option value="3">phòng bình dân</option>
          </select>
        </div>
        <button style="width:100px; height:30px; margin-top:25px; border-radius:10px; border:none; background-color:white"><i class="fas fa-search"></i> Search</button>
      </div>
    </div>
    <div class="featured-rooms">
      <h2 style="font-weight:bold">Popular Room </h2>
      <p>Favorite destinations based on customer reviews</p>
      <div class="room-list">
        <div class="room-item">
          <div class="room-image">
            <img src="./images/roomTypes/phong-thuong3.jpg" alt="Room 1"> 
          </div>
          <div class="room-details">
            <h3>California Sunset/Twilight Boat Cruise</h3>
            <div class="icon">
                <p><i class="fas fa-clock"></i> 2 days 3 nights</p>
                <p><i class="fas fa-user"></i> 4-6 guest</p>
            </div>
            <div class="room-price">
              <span>$48.25 / person</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
        </div>
        <div class="room-item">
          <div class="room-image">
            <img src="./images/roomTypes/phong-thuong6.jpg" alt="Room 2">
          </div>
          <div class="room-details">
            <h3>NYC: Food Tastings and Culture Tour</h3>
            <div class="icon">
                <p><i class="fas fa-clock"></i> 3 days 2 nights</p>
                <p><i class="fas fa-user"></i> 4-6 guest</p>
            </div>
            <div class="room-price">
              <span>$17.32 / person</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
        </div>
        <div class="room-item">
          <div class="room-image">
            <img src="./images/roomTypes/phong-thuong5.jpg" alt="Room 3">
          </div>
          <div class="room-details">
            <h3>Grand Canyon Horseshoe Bend 2 days</h3>
            <div class="icon">
                <p><i class="fas fa-clock"></i> 2 days 1 night</p>
                <p><i class="fas fa-user"></i> 4-6 guest</p>
            </div>
            <div class="room-price">
              <span>$15.63 / person</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="room-type">
        <h2>ROOM TYPE</h2>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2>Standard Room</h2>
                <div id="carouselOne" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./images/roomTypes/phong-thuong2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/roomTypes/phong-thuong7.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/roomTypes/phong-thuong4.jpg" class="d-block w-100">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <h2>VIP Room</h2>
                <div id="carouselTwo" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./images/roomTypes/phong-vip6.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/roomTypes/phong-vip9.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/roomTypes/phong-vip5.jpg" class="d-block w-100">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <h2>Premium Room</h2>
                <div id="carouselThree" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="./images/roomTypes/khach-san-cao-cap2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/roomTypes/khach-san-cao-cap3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="./images/roomTypes/khach-san-cao-cap4.jpg" class="d-block w-100">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="featured-rooms">
      <h2 style="font-weight:bold">Biggest Room sales </h2>
      <p>Favorite destinations based on customer reviews</p>
      <div class="room-list">
        <div class="room-item">
          <div class="room-image">
            <img src="./images/roomTypes/phong-vip3.jpg" alt="Room 1"> 
          </div>
          <div class="room-details">
            <h3>California Sunset/Twilight Boat Cruise</h3>
            <div class="icon">
                <p><i class="fas fa-clock"></i> 2 days 3 nights</p>
                <p><i class="fas fa-user"></i> 4-6 guest</p>
            </div>
            <div class="room-price">
              <span>$48.25 / person</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
        </div>
        <div class="room-item">
          <div class="room-image">
            <img src="./images/roomTypes/phong-vip6.jpg" alt="Room 2">
          </div>
          <div class="room-details">
            <h3>NYC: Food Tastings and Culture Tour</h3>
            <div class="icon">
                <p><i class="fas fa-clock"></i> 3 days 2 nights</p>
                <p><i class="fas fa-user"></i> 4-6 guest</p>
            </div>
            <div class="room-price">
              <span>$17.32 / person</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
        </div>
        <div class="room-item">
          <div class="room-image">
            <img src="./images/roomTypes/phong-vip1.jpg" alt="Room 3">
          </div>
          <div class="room-details">
            <h3>Grand Canyon Horseshoe Bend 2 days</h3>
            <div class="icon">
                <p><i class="fas fa-clock"></i> 2 days 1 night</p>
                <p><i class="fas fa-user"></i> 4-6 guest</p>
            </div>
            <div class="room-price">
              <span>$15.63 / person</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div><a href="https://www.google.com/maps/@15.7558144,106.8950386,8.25z?hl=vi-VN&entry=ttu&g_ep=EgoyMDI1MDQwMS4wIKXMDSoASAFQAw%3D%3D"></a></div>
  </div>
  <h2 sytle="color:black">Check your address  you want to go on  map</h2><br/>
  <iframe
  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1253183.4241749947!2d106.8950386!3d15.7558144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1610000000000"
  width="1250px"
  height="450"
  style="border:0;"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>

</body>
</html>