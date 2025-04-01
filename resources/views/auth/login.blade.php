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

        .inssetBG {
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.7);
        }

        .error-message {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .custom-margin {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .button_login {
            height: 50px;
            font-size: 20px;
            margin-top: 20px;
            width: 100%;
            max-width: 100%;
        }

        .button_login_google {
            height: 50px;
            font-size: 20px;
            justify-content: center;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen m-14">
    <div class="bg-white shadow-lg rounded-lg flex w-[1200px] h-auto custom-margin">
        <div class="relative w-1/2 hidden md:block">
            <img alt="Scenic view of a hotel surrounded by lush greenery" class="w-full h-full object-cover rounded-l-lg" src="https://storage.googleapis.com/a1aa/image/WEj28cISC9vCBwNsK7_WDrxadGkyPxg_oTmukaDvJoI.jpg" width="600" height="400" />
            <div class="inssetBG absolute inset-0 flex flex-col items-center justify-center rounded-l-lg p-8" style="margin: 40px;">
                <h1 class="custom-title">Quintessence</h1>
                <h2 class="custom-subtitle">Hotel</h2>
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
                    <div class="h-6">
                        @error('email') <p class="text-red-500 text-sm error-message">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mb-11">
                    <label class="block custom-label">Password</label>
                    <div class="relative">
                        <input name="password" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="password" placeholder="Enter your password" type="password" />
                        <i class="fas fa-eye absolute right-0 top-1/2 transform -translate-y-1/2 text-black cursor-pointer"
                            id="password-icon" onclick="togglePasswordVisibility('password')"></i>
                    </div>
                    <div class="h-6">
                        @error('password') <p class="text-red-500 text-sm error-message">{{ $message }}</p> @enderror
                    </div>
                    <a href="{{route('forgetPasswordPost')}}" class="text-blue-500 text-sm float-right mt-3">Forgot password?</a>
                </div>
                <div class="flex justify-center">
                    <button class="bg-blue-500 text-white py-2 rounded-lg font-bold hover:bg-blue-600 mb-2 button_login" type="submit">
                        Login
                    </button>
                </div>
            </form>

            <div class="flex flex-col items-center">
                <p class="text-secondary mb-2">Or login with</p>
                <button class=" w-full btn btn-danger d-flex align-items-center justify-content-center fw-bold py-3 mb-3 button_login_google">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png"
                        alt="Google Logo" class="me-2 bg-white p-1 rounded" style="width: 24px; height: 24px;">
                    Login with Google
                </button>
            </div>
            <div class="mt-2 text-center">
                <p class="text-gray-600">Don't have an account?</p>
                <a href="{{ route('register') }}" class="text-blue-500">Register</a>
            </div>
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

        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.remove();
            }
        }, 4000);
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>