<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .signin-google {
            height: 50px;
            font-size: 20px;
            justify-content: center;
            align-items: center;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        .custom-title {
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            color: #3252DF;
            font-weight: bold;
        }

        .custom-subtitle {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            color: black;
            font-weight: bold;
        }

        .custom-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }

        .custom-label {
            font-size: 20px;
            color: black;
        }

        .custom-input {
            padding: 17px;
            width: calc(100% + 30px);
        }

        .custom-input::placeholder {
            font-size: 20px;
        }

        .custom-terms {
            font-size: 16px;
        }

        .custom-select {
            font-size: 20px;
            width: 120px;
        }

        .inssetBG {
            border-radius: 10px;
            background-color: white;
        }

        .error-message {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .custom-margin {
            margin-top: 60px;
            margin-bottom: 60px;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen m-14">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show fixed-top" style="top: 20px; right: 20px; z-index: 1050;" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="bg-white shadow-lg rounded-lg flex w-[1200px] h-auto custom-margin">
        <div class="relative w-1/2 hidden md:block">
            <img alt="Scenic view of a hotel surrounded by lush greenery" class="w-full h-full object-cover rounded-l-lg" src="https://storage.googleapis.com/a1aa/image/WEj28cISC9vCBwNsK7_WDrxadGkyPxg_oTmukaDvJoI.jpg" width="600" height="400" />
            <div class=" inssetBG absolute inset-0  bg-opacity-70 flex flex-col items-center justify-center rounded-l-lg p-8" style="margin: 40px;">
                <h1 class="custom-title">
                    Quintessence
                </h1>
                <h2 class="custom-subtitle">
                    Hotel
                </h2>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 m-8">
            <h2 class="custom-heading mb-6">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block custom-label">Email</label>
                    <input name="email" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="name@gmail.com" type="email" value="{{ old('email') }}" />
                    @error('email') <p class="text-red-500 text-sm error-message">{{ $message }}</p> @enderror
                </div>

                <div class="mb-11">
                    <label class="block custom-label">Password</label>
                    <div class="relative">
                        <input name="password" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="password" placeholder="Enter your password" type="password" />
                        <i class="fas fa-eye absolute right-0 top-1/2 transform -translate-y-1/2 text-black cursor-pointer"
                            id="password-icon" onclick="togglePasswordVisibility('password')"></i>
                    </div>
                    <a href="#" class="text-blue-500 text-sm float-right mt-3">Forgot password?</a>
                </div>

                <div class="flex justify-center">
                    <button class="w-full max-w-md bg-blue-500 text-white py-2 rounded-lg font-bold hover:bg-blue-600 mb-5 button-login" type="submit">
                        Login
                    </button>
                </div>
            </form>
            <div class="flex flex-col items-center">
                <p class="text-gray-600 mb-2">Or login with</p>
                <button class="signin-google w-full bg-blue-600 text-white py-3 rounded-lg font-bold flex items-center justify-center hover:bg-blue-700 mb-5">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png"
                        alt="Google Logo" class="w-6 h-6 mr-3 bg-white p-1 rounded-md">
                    Login with Google
                </button>
            </div>
            <div class="mt-4 text-center">
                <p class="text-gray-600">Don't have an account?</p>
                <a href="{{ route('register') }}" class="text-blue-500">Register</a>
            </div>
        </div>

        <script>
            function togglePasswordVisibility(id) {
                const input = document.getElementById(id);
                const icon = document.getElementById(id + '-icon');
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>