<html>
<head>
    <title>Hotel Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
        function toggleSortOptions(action) {
            event.preventDefault();
            if(action == 'type'){
                const options = document.getElementById('typeOptions');
                options.classList.toggle('hidden');
            }else if (action == 'sort'){
                const options = document.getElementById('sortOptions');
                options.classList.toggle('hidden');
            }else if (action == 'capacity'){
                const options = document.getElementById('capacityOptions');
                options.classList.toggle('hidden');
            }else if (action == 'price'){
                const options = document.getElementById('priceOptions');
                options.classList.toggle('hidden');
            }
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
            <form class="flex space-x-4 w-3/4 bg-white p-4 rounded shadow" action="/search" method="POST">
                @csrf
                <!-- các input -->
                <input type="hidden" id="selectedRoomTypes" name="type_id" value="{{$type_id}}">
                <input type="hidden" id="selectedRoomCapacities" name="capacity_id" value="{{$capacity_id}}">
                <input type="hidden" id="selectedSort" name="method_sort" value="">
                <input type="hidden" id="minInput" name="minimum">
                <input type="hidden" id="maxInput" name="maximum">
                <input type="hidden"  name="inception_day" value="{{$start_day}}">
                <input type="hidden"  name="expiration_day" value="{{$end_day}}">
                
                <div class="relative flex-1">
                    <button class="p-2 border rounded flex items-center justify-center w-full" onclick="toggleSortOptions('type')">
                        <i class="fas fa-bars mr-2"></i>
                        <span>Room type</span>
                    </button>
                    <div id="typeOptions" class="absolute left-0 right-0 bg-white border rounded mt-2 hidden z-10">
                        <ul>
                            @php
                                $type_id = explode(',',$type_id) ;
                                !empty($capacity_id) ? $capacity_id = explode(',',$capacity_id) : null ;
                            @endphp
                            @foreach($types as $type)
                            <li class="p-2 border-b flex items-center">
                                <input type="checkbox"  name="roomType" value="{{ $type->id}}" class="mr-2 type_room"{{ is_array($type_id) ? (in_array($type->id,$type_id)? 'checked' : '') : ''}}>
                                <label for="option1">{{ $type->type_name}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="relative flex-1">
                    <button class="p-2 border rounded flex items-center justify-center w-full" onclick="toggleSortOptions('capacity')">
                        <i class="fas fa-bars mr-2"></i>
                        <span>Room Capacity</span>
                    </button>
                    <div id="capacityOptions" class="absolute left-0 right-0 bg-white border rounded mt-2 hidden z-10">
                        <ul>
                            @foreach($capacities as $capacity)
                                <li class="p-2 border-b flex items-center">
                                    <input type="checkbox"  name="roomCapacity" value="{{ $capacity->id}}" class="mr-2 capacity_room" {{ is_array($capacity_id) ? (in_array($capacity->id,$capacity_id)? 'checked' : '') : ''}}>
                                    <label for="option1">{{ $capacity->capacity}}</label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="relative flex-1">
                    <button class="p-2 border rounded flex items-center justify-center w-full" onclick="toggleSortOptions('price')">
                        <i class="fas fa-bars mr-2"></i>
                        <span>Room price</span>
                    </button>
                    <div id="priceOptions" class="absolute left-0 right-0 bg-white border rounded mt-2 hidden z-10 p-3">
                        <div class="container">
                            <h4>Chọn khoảng giá:</h4>
                            <div class="mb-3">
                                <p>Min: <span id="minValue"></span></p>
                                <input type="range" id="minRange" min="0" max="{{$maxPrice}}" value="0" class="form-range">
                            </div>
                            <div>
                                <p>Max: <span id="maxValue"></span></p>
                                <input type="range" id="maxRange" min="0" max="{{$maxPrice}}" value="{{$maxPrice}}" class="form-range">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative flex-1">
                    <button class="p-2 border rounded flex items-center justify-center w-full" onclick="toggleSortOptions('sort')">
                        <i class="fas fa-bars mr-2"></i>
                        <span>Other sort</span>
                    </button>
                    <div id="sortOptions" class="absolute left-0 right-0 bg-white border rounded mt-2 hidden z-10">
                        <ul>
                            <li class="p-2 border-b flex items-center">
                                <input type="radio"  name="sort" value="asc" class="mr-2 sort_room">
                                <label for="option1">Ascending </label>
                            </li>
                            <li class="p-2 border-b flex items-center">
                                <input type="radio"  name="sort" value="desc" class="mr-2 sort_room">
                                <label for="option1">Desscending </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative flex-1">
                    <button type="submit" class="p-2 border rounded flex items-center justify-center w-full bg-blue-500 text-white hover:bg-blue-600 transition">
                        <span>Call</span>
                    </button>
                </div>
            </form>
            <div class="w-1/4 bg-white p-4 rounded shadow ml-4">
                <button class="p-2 border rounded w-full">Information booking</button>
            </div>
        </div>
        <div class="flex">
            <!-- Room Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-3/4">
                <!-- Room Card -->
                @foreach($rooms as $room)
                <div class="bg-white p-4 rounded shadow">
                    <div class="relative">
                        <img alt="Room Image" class="w-full h-40 object-cover rounded" height="200" src="{{asset('storage/rooms/$room->image')}}" width="300"/>
                        <div class="absolute top-2 right-2 flex">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-bold">{{$room->name}}</h3>
                        <p class="text-gray-500">{{$room->type_name}}</p>
                        <div class="flex items-center mt-2">
                            <span class="text-teal-500 text-xl font-bold">{{$room->discount_price}}</span>
                            <span class="text-teal-500 text-xl ml-2">/ Night</span>
                            @if(!empty($room->discount))
                            <span class="text-red-500 text-xl line-through ml-4">{{$room->price}}</span>
                            <span class="text-red-500 text-xl ml-2">/ Night</span>
                            @endif
                        </div>
                        <button class="mt-4 bg-teal-500 text-white py-2 px-4 rounded">BOOK</button>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Booking Information -->
            <div class="w-1/4 ml-4">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-lg font-bold">Hotel name</h3>
                    <p class="text-gray-500">{{$start_day}} - {{$end_day}} </p>
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
    <script>
        // type
        const checkboxestype = document.querySelectorAll(".type_room");
        const hiddenInput = document.getElementById("selectedRoomTypes");

        checkboxestype.forEach(checkbox => {
            checkbox.addEventListener("change", function () {
                let selectedValues = Array.from(checkboxestype)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);

                hiddenInput.value = selectedValues.join(",");
            });
        });
        // capacity
        const capacityCheckboxes = document.querySelectorAll(".capacity_room");
        const hiddenCapacityInput = document.getElementById("selectedRoomCapacities");

        capacityCheckboxes.forEach(checkbox => {
            checkbox.addEventListener("change", function () {
                let selectedCapacities = Array.from(capacityCheckboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);

                hiddenCapacityInput.value = selectedCapacities.join(",");
                console.log(hiddenCapacityInput.value);
            });
        });
        // sort
        const sortRadios = document.querySelectorAll(".sort_room");
        const hiddenSortInput = document.getElementById("selectedSort");

        sortRadios.forEach(radio => {
            radio.addEventListener("change", function () {
                hiddenSortInput.value = this.value;
            });
        });
        // Gía
        const minRange = document.getElementById("minRange");
        const maxRange = document.getElementById("maxRange");
        const minValueSpan = document.getElementById("minValue");
        const maxValueSpan = document.getElementById("maxValue");
        const minInput = document.getElementById("minInput");
        const maxInput = document.getElementById("maxInput");

        // Cập nhật giá trị hiển thị ban đầu
        function updateValues() {
            minValueSpan.textContent = minRange.value;
            maxValueSpan.textContent = maxRange.value;
            minInput.value = minRange.value;
            maxInput.value = maxRange.value;
        }

        // Xử lý khi kéo thanh giá trị min
        minRange.addEventListener("input", function () {
            if (parseInt(minRange.value) > parseInt(maxRange.value)) {
                minRange.value = maxRange.value;
            }
            updateValues();
        });

        // Xử lý khi kéo thanh giá trị max
        maxRange.addEventListener("input", function () {
            if (parseInt(maxRange.value) < parseInt(minRange.value)) {
                maxRange.value = minRange.value;
            }
            updateValues();
        });

        updateValues();
    </script>
</body>
</html>