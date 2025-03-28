<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .left {
            width: 20%;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .right {
            flex: 1;
            padding: 20px;
        }
        .profile-card {
            display: inline-block;
            border: 2px solid #ccc; /* Khung bao quanh ảnh đại diện */
            border-radius: 10px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-pic {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%; /* Ảnh tròn */
            display: block;
            margin: 0 auto;
        }
        .upload-btn {
            margin-top: 15px; /* Nút bấm nằm dưới ảnh */
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .upload-btn:hover {
            background-color: #45a049;
        }
        .buttons button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            background-color: #e0e0e0;
            color: black;
            cursor: pointer;
            border-radius: 5px;
            text-align: left;
        }
        .buttons button:hover {
            background-color: #c0c0c0;
        }
        .buttons button.active {
            background-color: #4caf50;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="left">
        <div class="profile-card">
            <img src="https://img.tripi.vn/cdn-cgi/image/width=700,height=700/https://gcs.tripi.vn/public-tripi/tripi-feed/img/474053FoG/hinh-nguoi-that-de-thuong_043419682.jpg" 
                 alt="Profile Picture" class="profile-pic">
            <button class="upload-btn">Upload</button>
        </div>
        <div class="buttons">
            <button onclick="loadPage('/profile', this)">Profile</button>
            <button onclick="loadPage('/booked', this)">Booked</button>
            <button onclick="loadPage('/mark', this)">Mark</button>
        </div>
    </div>

    <div class="right" id="content">
        <h2>Welcome</h2>
        <p>Chọn nội dung để xem.</p>
    </div>

    <script>
        function loadPage(url, btn) {
            // Xóa lớp 'active' khỏi tất cả các nút
            const buttons = document.querySelectorAll('.buttons button');
            buttons.forEach(button => button.classList.remove('active'));

            // Thêm lớp 'active' vào nút được nhấn
            btn.classList.add('active');

            // Tải nội dung của trang
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('content').innerHTML = html;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>
