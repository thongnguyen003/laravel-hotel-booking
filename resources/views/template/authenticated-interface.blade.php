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
        .avatar_profile{
            display:none;
            margin-bottom:20px;
        }
        .breadcrumb-profile {
            font-size: 14px;
            list-style: none;
            display: flex;
            padding: 0;
            margin: 0;
        }
        .breadcrumb-profile li {
            margin-right: 5px;
        }
        .breadcrumb-profile li a {
            text-decoration: none;
            color: blue;
        }
        .breadcrumb-profile li::after {
            content: ">";
            margin-left: 5px;
        }
        .breadcrumb-profile li:last-child::after {
            content: "";
        }
        .breadcrumb-profile li:last-child a {
            color: black;
            pointer-events: none;
        }
        .btn-update-profile button,
        .btn-cancel-update-profile button,
        .btn-logout button,
        .btn-edit-profile button{
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-group-edit{
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:10px;
        }
        .btn-cancel-update-profile button{
            margin-right:20px;
            background-color:rgb(255, 208, 0);
        }
        .btn-update-profile button{
            background-color: #4caf50;
        }
        .btn-logout button{
            background-color:rgb(255, 81, 0);
            padding: 10px 25px;
        }
        .btn-edit-profile button{
            margin-top:20px;
            background-color:rgb(255, 208, 0);
        }

        .container-navigation {
            width: 20%;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .content {
            flex: 1;
            padding: 20px; 
        }
        .box-navigation{
            margin: 20px 0;
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
        /* Style của profile  */
        .btn {
            background-color: #e8e8e8;
            border: none;
            padding: 10px 15px;
            margin: 10px 0;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #d0d0d0;
        }

        .btn.active {
            background-color: #007BFF;
            color: white;
        }

        .profile-info {
            padding: 20px;
            width: 70%;
            background-color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="email"],
        .gender_profile {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        /* Style của edit-profile */
        .birthday-input {
        display: flex;
        gap: 10px;
        }

        .birthday-input input {
        width: 80px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        }

        .birthday-input input:focus {
        outline: 2px solid #007bff;
        }
        /* Style của mark */
        .container-mark {
            display: flex;
        }

        .content-mark {
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
        /* Style của booked */
        .container-booked {
            padding: 20px;
        }

        .filter-booked {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .filter-booked label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .filter-booked input {
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
    <!-- Navigation profile -->
    @include('component.navigation-profile')
    @yield('content')
</body>
</html>
