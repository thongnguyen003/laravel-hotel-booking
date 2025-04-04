<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đặt Chỗ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<form action="/search" method="POST">
    @csrf
    <label for="checkin">Ngày đến:</label>
    <input type="date" id="checkin" name="inception_day">

    <label for="checkout">Ngày đi:</label>
    <input type="date" id="checkout" name="expiration_day">

    <label for="id_type">Loại ID:</label>
    <select id="id_type" name="type_id">
        <option value="1">Hộ chiếu</option>
        <option value="2">CMND</option>
        <option value="3">CCCD</option>
    </select>

    <button type="submit">Gửi</button>
</form>

</body>
</html>
