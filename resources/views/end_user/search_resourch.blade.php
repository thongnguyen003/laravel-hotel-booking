<html>
<head>
    <title>Hotel Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
        function toggleSortOptions() {
            const sortOptions = document.getElementById('sortOptions');
            sortOptions.classList.toggle('hidden');
        }
    </script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-teal-500 p-4 flex justify-between items-center">
        <div class="flex items-center">
            <img alt="Hotel Logo" class="h-12 w-12" height="50" src="https://storage.googleapis.com/a1aa/image/nCjm3F3FksKW0bcC9qzx2OnZtxDp3h30Cs-AcByAfyQ.jpg" width="50"/>
            <span class="text-white text-2xl ml-2">QUINTESSENCE HOTEL</span>
        </div>
        <nav class="flex space-x-4">
            <a class="text-white" href="#">Home</a>
            <a class="text-white" href="#">Booking</a>
            <a class="text-white" href="#">Services</a>
            <a class="text-white" href="#">About Us</a>
            <a class="text-white" href="#">Contact Us</a>
        </nav>
        <div>
            <i class="fas fa-user text-white text-2xl"></i>
        </div>
    </header>
    <!-- Main Content -->
    <main class="p-4">
        <div class="flex justify-between items-center mb-4">
            <div class="flex space-x-4 w-3/4 bg-white p-4 rounded shadow">
                <select class="p-2 border rounded flex-1">
                    <option>Type Room</option>
                </select>
                <select class="p-2 border rounded flex-1">
                    <option>Capacity</option>
                </select>
                <select class="p-2 border rounded flex-1">
                    <option>Price</option>
                </select>
                <div class="relative flex-1">
                    <button class="p-2 border rounded flex items-center justify-center w-full" onclick="toggleSortOptions()">
                        <i class="fas fa-bars mr-2"></i>
                        <span>Other sort</span>
                    </button>
                    <div id="sortOptions" class="absolute left-0 right-0 bg-white border rounded mt-2 hidden z-10">
                        <ul>
                            <li class="p-2 border-b">Option 1</li>
                            <li class="p-2 border-b">Option 2</li>
                            <li class="p-2">Option 3</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-1/4 bg-white p-4 rounded shadow ml-4">
                <button class="p-2 border rounded w-full">Information booking</button>
            </div>
        </div>
        <div class="flex">
            <!-- Room Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-3/4">
                <!-- Room Card -->
                <div class="bg-white p-4 rounded shadow">
                    <div class="relative">
                        <img alt="Room Image" class="w-full h-40 object-cover rounded" height="200" src="https://storage.googleapis.com/a1aa/image/ZYUK2NQ1MLzIWHUz1PVb2imkfYczTGLBQRI2Eg_DK4o.jpg" width="300"/>
                        <div class="absolute top-2 right-2 flex">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-bold">Large Room with Attached Bathroom</h3>
                        <p class="text-gray-500">Deluxe Room</p>
                        <div class="flex items-center mt-2">
                            <span class="text-teal-500 text-xl font-bold">$200</span>
                            <span class="text-teal-500 text-xl ml-2">/ Night</span>
                            <span class="text-red-500 text-xl line-through ml-4">$200</span>
                            <span class="text-red-500 text-xl ml-2">/ Night</span>
                        </div>
                        <button class="mt-4 bg-teal-500 text-white py-2 px-4 rounded">BOOK</button>
                    </div>
                </div>
            </div>
            <!-- Booking Information -->
            <div class="w-1/4 ml-4">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold">Hotel name</h3>
                    <p class="text-gray-500">22/03/2025 - 25/03/2025 (3 nights)</p>
                    <div class="mt-4">
                        <div class="flex justify-between items-center">
                            <span>Superior Twin Room 230</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-teal-500 text-xl">$200 / Night</span>
                            <button class="text-red-500">Cancel</button>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span>Superior Twin Room 230</span>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-teal-500 text-xl">$200 / Night</span>
                            <button class="text-red-500">Cancel</button>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span>Total</span>
                        <span class="text-teal-500 text-xl">$400</span>
                    </div>
                    <button class="mt-4 bg-teal-500 text-white py-2 px-4 rounded w-full">BOOK NOW</button>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-200 p-4 mt-8">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-lg font-bold">Travila</h3>
                <p>Subscribe to see secret deals prices drop the moment you sign up!</p>
                <div class="flex items-center mt-2">
                    <input class="p-2 border rounded" placeholder="Enter your email" type="email"/>
                    <button class="bg-yellow-400 text-black py-2 px-4 rounded ml-2">Subscribe</button>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-bold">Support</h3>
                <ul>
                    <li>Homepage</li>
                    <li>About us</li>
                    <li>Booking</li>
                    <li>Contact us</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold">Services</h3>
                <ul>
                    <li>Đà Nẵng</li>
                    <li>Hà Nội</li>
                    <li>Hải Phòng</li>
                    <li>TP Hồ Chí Minh</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold">Services</h3>
                <ul>
                    <li>Quảng Ngãi</li>
                    <li>Hà Giang</li>
                    <li>Cao Bằng</li>
                    <li>Bến Tre</li>
                </ul>
            </div>
        </div>
        <div class="mt-4 flex justify-between items-center">
            <div>
                <p>99 Tô Hiến Thành - Mỹ Khê 3 - Đà Nẵng City</p>
                <p>hai8984@gmail.com</p>
                <p>Hours: 8:00 - 17:00, Mon - Sat</p>
                <p>Need help? Call us</p>
                <p>84+ 334-224-700</p>
            </div>
            <div>
                <p>© 2025 Travila Inc. Hello everyone.</p>
            </div>
        </div>
    </footer>
</body>
</html>