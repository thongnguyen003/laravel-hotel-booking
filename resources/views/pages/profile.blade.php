<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            display: flex;
            max-width: 800px;
            margin: 30px auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .sidebar {
            background-color: #fff;
            padding: 20px;
            width: 30%;
            border-right: 1px solid #e0e0e0;
            text-align: center;
        }



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
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
        <div class="profile-info">
            <form>
                <label for="name">User Name:</label>
                <input type="text" id="name" placeholder="Name">

                <label for="phone">User Phone:</label>
                <input type="text" id="phone" placeholder="Phone number">

                <label for="age">User Age:</label>
                <input type="text" id="age" placeholder="Age">

                <label for="email">User Email:</label>
                <input type="email" id="email" placeholder="Email">
            </form>
        </div>
</body>
</html>