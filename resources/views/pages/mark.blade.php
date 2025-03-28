<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            display: flex;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #fff;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .room-item {
            position: relative; /* Để định vị nút xóa */
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
            background-color: #fff;
        }

        .room-item img {
            width: 90%;
            border-radius: 5px;
        }

        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
        }

        .delete-btn:hover {
            background-color: darkred;
        }

        .price {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <main class="content">
            <div class="room-grid">
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 101">
                    <p>Phòng 101</p>
                    <span class="price">100.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 102">
                    <p>Phòng 102</p>
                    <span class="price">150.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 103">
                    <p>Phòng 103</p>
                    <span class="price">200.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 101">
                    <p>Phòng 101</p>
                    <span class="price">100.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 102">
                    <p>Phòng 102</p>
                    <span class="price">150.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 103">
                    <p>Phòng 103</p>
                    <span class="price">200.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 101">
                    <p>Phòng 101</p>
                    <span class="price">100.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 102">
                    <p>Phòng 102</p>
                    <span class="price">150.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 103">
                    <p>Phòng 103</p>
                    <span class="price">200.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 101">
                    <p>Phòng 101</p>
                    <span class="price">100.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 102">
                    <p>Phòng 102</p>
                    <span class="price">150.000 đ</span>
                </div>
                <div class="room-item">
                    <button class="delete-btn" onclick="deleteRoom(this)">×</button>
                    <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 103">
                    <p>Phòng 103</p>
                    <span class="price">200.000 đ</span>
                </div>  
                <!-- Add more rooms as needed -->
            </div>
        </main>
    </div>

    <script>
        function deleteRoom(button) {
            const roomItem = button.parentElement;
            roomItem.remove(); // Xóa tấm ảnh khỏi danh sách
        }
    </script>
</body>
</html>
