<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Profile Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-white flex flex-col items-center justify-center min-h-screen">
        <div class="w-full flex justify-center space-x-4 py-4 bg-gray-100">
            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition duration-300">profile</button>
            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition duration-300">booked</button>
            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition duration-300">mark</button>
        </div>
        <div class="w-full max-w-2xl p-6 bg-white border border-gray-300 rounded-lg shadow-md mt-6">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h1 class="text-2xl font-semibold">Hồ Sơ Của Tôi</h1>
                    <p class="text-gray-500">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                </div>
                <i class="fas fa-sign-out-alt text-gray-500 text-xl"></i>
            </div>
            <div class="flex items-start space-x-4">
                <div class="flex-1 ml-6 mt-6">
                    <div class="mb-6">
                        <span class="font-semibold text-lg">
                        Mx.
                        </span>
                        <span class="ml-4 text-lg">
                        Nguyễn Võ Hoàng Phan
                        </span>
                    </div>
                    <div class="mb-6">
                        <span class="font-semibold text-lg">Email</span>
                        <span class="ml-4 text-lg">nvhoangphan@gmail.com</span>
                    </div>
                    <div class="mb-6">
                        <span class="font-semibold text-lg">
                        Số điện thoại
                        </span>
                        <span class="ml-4 text-lg">
                        0975373333
                        </span>
                    </div>
                    <div class="mb-6">
                        <span class="font-semibold text-lg">
                        Ngày sinh
                        </span>
                        <span class="ml-4 text-lg">
                        1/1/1999
                        </span>
                    </div>
                    <div class="mb-6">
                        <span class="font-semibold text-lg">
                        Địa chỉ
                        </span>
                        <span class="ml-4 text-lg">
                        Đà Nẵng
                        </span>
                    </div>
                </div>
                <img alt="Profile picture of a person with short black hair, wearing a blue shirt, on an orange background" class="w-24 h-24 rounded-full mt-0" height="100" src="https://storage.googleapis.com/a1aa/image/qsmTeadFSHDxxGB7N3V1UnAbPW-JfFy3Ijus6sdH2B8.jpg" width="100"/>
            </div>
            <div class="flex justify-center mt-6">
                <button class="px-6 py-2 bg-blue-600 text-white rounded-lg text-lg">
                Chỉnh sửa
                </button>
            </div>
        </div>
    </body>
</html>