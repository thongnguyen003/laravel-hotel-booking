<div class="right" id="content">
    <div class="container-mark">
        <main class="content-mark">
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
</div>
    
<script>
    function deleteRoom(button) {
        const roomItem = button.parentElement;
        roomItem.remove(); // Xóa tấm ảnh khỏi danh sách
    }
</script>