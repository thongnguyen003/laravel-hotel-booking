<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            padding: 20px;
        }

        .filter {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .filter label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .filter input {
            margin-right: 5px;
        }

        .room-card {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
            padding: 15px;
            gap: 20px;
        }

        .room-card img {
            width: 120px;
            height: 120px;
            border-radius: 10px;
            object-fit: cover;
        }

        .room-info {
            flex: 1;
        }

        .room-info h3 {
            margin: 0;
            font-size: 25px;
            font-weight: bold;
        }

        .room-info .price {
            color: red;
            font-weight: bold;
            font-size: 20px;
            margin-top: 5px;           
        }

        .action-group {
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            justify-content: space-between; /* Đặt khoảng cách đều giữa ngày và nút */
            gap: 300px; /* Khoảng cách giữa ngày và nút Hủy */
        }

        .action-group .date {
            font-size: 25px;
            color: gray;
        }

        .cancel-btn {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .cancel-btn:hover {
            background-color: #0056b3;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Filter Options -->
        <div class="filter">
            <label>
                <input type="radio" name="filter" value="all" checked onchange="filterRooms()"> All booked room
            </label>
            <label>
                <input type="radio" name="filter" value="reserved" onchange="filterRooms()"> Reserved room
            </label>
            <label>
                <input type="radio" name="filter" value="cancel" onchange="filterRooms()"> Cancel room
            </label>
        </div>

        <!-- Rooms List -->
        <div class="rooms">
            <!-- Example Room Card -->
            <div class="room-card" data-status="all">
                <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 101">
                <div class="room-info">
                    <h3>Phòng 101</h3>
                    <p class="price">100.000 đ</p>
                </div>
                <div class="action-group">
                    <p class="date">20/12/2025</p>
                    <button class="cancel-btn">Hủy</button>
                </div>
            </div>
            <div class="room-card" data-status="reserved">
                <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 102">
                <div class="room-info">
                    <h3>Phòng 102</h3>
                    <p class="price">150.000 đ</p>
                </div>
                <div class="action-group">
                    <p class="date">21/12/2025</p>
                    <button class="cancel-btn">Hủy</button>
                </div>
            </div>
            <div class="room-card" data-status="cancel">
                <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 103">
                <div class="room-info">
                    <h3>Phòng 103</h3>
                    <p class="price">200.000 đ</p>
                </div>
                <div class="action-group">
                    <p class="date">22/12/2025</p>
                    <button class="cancel-btn">Hủy</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript Function to Filter Rooms Based on Status
        function filterRooms() {
            const selectedFilter = document.querySelector('input[name="filter"]:checked').value;
            const roomCards = document.querySelectorAll('.room-card');

            roomCards.forEach(card => {
                const status = card.getAttribute('data-status');
                if (selectedFilter === 'all' || status === selectedFilter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>
