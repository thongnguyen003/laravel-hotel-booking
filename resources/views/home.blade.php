<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-indigo-600">Logo</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-900 hover:text-indigo-600">Home</a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600">Features</a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600">Pricing</a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600">About</a>
                </div>
                <div class="flex items-center">
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Get Started</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl">Build amazing digital experiences</h1>
                    <p class="mt-4 text-xl text-gray-500">Our platform helps you create beautiful websites and applications with ease.</p>
                    <div class="mt-8 flex space-x-4">
                        <button class="bg-indigo-600 text-white px-6 py-3 rounded-md hover:bg-indigo-700">Get Started</button>
                        <button class="border border-gray-300 text-gray-700 px-6 py-3 rounded-md hover:bg-gray-50">Learn More</button>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                         alt="Hero image" 
                         class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Powerful Features</h2>
                <p class="mt-4 text-xl text-gray-500 max-w-3xl mx-auto">Everything you need to build modern websites and applications</p>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-bolt text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900">Fast Performance</h3>
                    <p class="mt-2 text-gray-500">Optimized for speed and efficiency to deliver the best user experience.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-lock text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900">Secure by Default</h3>
                    <p class="mt-2 text-gray-500">Built with security in mind to protect your data and users.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-cog text-indigo-600 text-xl"></i>
                    </div>
                    <h3 class="mt-6 text-lg font-medium text-gray-900">Easy to Customize</h3>
                    <p class="mt-2 text-gray-500">Flexible components that can be easily customized to fit your needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-medium">Product</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Features</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Pricing</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Documentation</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium">Company</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium">Legal</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Privacy</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Terms</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium">Connect</h3>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-700">
                <p class="text-gray-400 text-sm">© 2023 Company Name. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>