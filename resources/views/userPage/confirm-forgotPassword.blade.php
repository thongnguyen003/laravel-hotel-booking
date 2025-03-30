<html>
<head>
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center">Forgot Password</h2>
        <form class="space-y-4">
            <div>
                <label for="code" class="block text-sm font-medium text-gray-700">Enter your code</label>
                <input type="text" id="code" name="code" placeholder="code" class="w-full px-3 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="new-password" class="block text-sm font-medium text-gray-700">New password</label>
                <div class="relative mt-1">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-lock text-gray-400"></i>
                    </span>
                    <input type="password" id="new-password" name="new-password" placeholder="Enter new password" class="w-full px-3 py-2 pl-10 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm new password</label>
                <div class="relative mt-1">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-lock text-gray-400"></i>
                    </span>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" class="w-full px-3 py-2 pl-10 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-800 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Update your password</button>
        </form>
        <div class="flex items-center justify-center space-x-2">
            <hr class="w-full border-gray-300">
            <span class="text-sm text-gray-500">Or</span>
            <hr class="w-full border-gray-300">
        </div>
        <button class="w-full px-4 py-2 text-blue-800 border border-blue-800 rounded-md hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500">Create an account</button>
    </div>
</body>
</html>