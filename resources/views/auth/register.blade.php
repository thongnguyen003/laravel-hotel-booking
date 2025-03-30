<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
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

        .custom-terms {
            font-size: 16px;
        }

        .custom-select {
            font-size: 20px;
            width: 120px;
        }

        .inssetBG {
            border-radius: 10px;
        }

        .error-message {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .custom-margin {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .button-register {
            height: 50px;
            font-size: 20px;
            justify-content: center;
        }
    </style>
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
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen m-14">
    <div class="bg-white shadow-lg rounded-lg flex w-[1200px] h-auto custom-margin">
        <div class="relative w-1/2 hidden md:block">
            <img alt="Scenic view of a hotel surrounded by lush greenery" class="w-full h-full object-cover rounded-l-lg" src="https://storage.googleapis.com/a1aa/image/WEj28cISC9vCBwNsK7_WDrxadGkyPxg_oTmukaDvJoI.jpg" width="600" height="400" />
            <div class=" bg-opacity-70 inssetBG absolute inset-0 bg-white flex flex-col items-center justify-center rounded-l-lg p-8" style="margin: 40px;">
                <h1 class="custom-title">
                    Quintessence
                </h1>
                <h2 class="custom-subtitle">
                    Hotel
                </h2>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 m-8">
            <h2 class="custom-heading mb-6">Create Account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label class="block custom-label"> Name </label>
                    <input name="name" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your name" type="text" value="{{ old('name') }}" />
                    @error('name') <p class="text-red-500 text-sm  error-message">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block custom-label"> Email </label>
                    <input name="email" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="name@gmail.com" type="email" value="{{ old('email') }}" />
                    @error('email') <p class="text-red-500 text-sm  error-message">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block custom-label"> Phone No </label>
                    <input name="phone" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="0878138854" type="text" value="{{ old('phone') }}" />
                    @error('phone') <p class="text-red-500 text-sm  error-message">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4 flex items-center">
                    <label class="custom-label mr-4"> Gender </label>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <input class="mr-2" id="male" name="gender" type="radio" value="male" />
                            <label class="custom-label" for="male"> Male </label>
                        </div>
                        <div class="flex items-center">
                            <input class="mr-2" id="female" name="gender" type="radio" value="female" />
                            <label class="custom-label" for="female"> Female </label>
                        </div>
                    </div>
                </div>
                @error('gender')
                <p class="text-red-500 text-sm  error-message">{{ $message }}</p>
                @enderror

                <div class="mb-4">
                    <label class="block custom-label"> Date of Birth </label>
                    <div class="relative">
                        <input name="day_of_birth" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="date" value="{{ old('day_of_birth') }}" style="padding-right:28px;" />
                    </div>
                    @error('day_of_birth')
                    <p class="text-red-500 text-sm  error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block custom-label"> Password </label>
                    <div class="relative">
                        <input name="password" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="password" placeholder="Enter..." type="password" />
                        <i class="fas fa-eye absolute right-0 top-1/2 transform -translate-y-1/2 text-black cursor-pointer"
                            id="password-icon" onclick="togglePasswordVisibility('password')"></i>
                    </div>
                    @error('password') <p class="text-red-500 text-sm  error-message">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block custom-label"> Confirm Password </label>
                    <div class="relative">
                        <input name="password_confirmation" class="custom-input border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            id="confirm-password" placeholder="Enter..." type="password" />
                        <i class="fas fa-eye absolute right-0 top-1/2 transform -translate-y-1/2 text-black cursor-pointer"
                            id="confirm-password-icon" onclick="togglePasswordVisibility('confirm-password')"></i>
                    </div>
                    @error('password_confirmation') <p class="text-red-500 text-sm  error-message">{{ $message }}</p> @enderror
                </div>
                <div class="flex justify-center">
                    <button class="w-full max-w-md bg-blue-500 text-white py-2 rounded-lg font-bold hover:bg-blue-600 mb-5 button-register" type="submit">
                        Register
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <p class="text-gray-600">Do you already have an account?</p>
                <a href="{{ route('login') }}" class="text-blue-500">Login</a>
            </div>
        </div>
    </div>
</body>

</html>