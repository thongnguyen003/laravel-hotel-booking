{{-- @extends('master') --}}
{{-- @section('content') --}}
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
</head>
<body class="font-roboto bg-gray-100">
    <div class="max-w-4xl mx-auto p-4 bg-white shadow-md">
        <div class="mb-4">
            <h1 class="text-xl font-bold">{{ $room->name }}</h1>
            <p class="text-gray-600">Số 8 Nguyễn Trung Trực, Bến Tre, Việt Nam</p>
        </div>
        <div class="flex mb-4">
            <div class="flex-1">
                <div class="flex mb-4">
                    <img alt="Hình ảnh chính của khách sạn" class="w-2/3 h-64 object-cover mr-2" src="{{ $room->image }}"/>
                    <div class="grid grid-cols-1 gap-1 w-1/3">
                        <img alt="Hình ảnh phòng khách sạn 1" class="w-full h-32 object-cover mb-1" src="https://storage.googleapis.com/a1aa/image/knoWuacYQ6koQQdLXjeloIxD9Xel3RyAtODY7Wn35wU.jpg"/>
                        <img alt="Hình ảnh phòng khách sạn 2" class="w-full h-32 object-cover mb-1" src="https://storage.googleapis.com/a1aa/image/uHLWMJMFrVKPUX0MSEEouDznnaFCxhzTfdBSswl4poE.jpg"/>
                        <img alt="Hình ảnh phòng khách sạn 3" class="w-full h-32 object-cover mb-1" src="https://storage.googleapis.com/a1aa/image/rfyPPBPZR_rafjheAp6Gu6GJbrvukqoI9NTtUMRmFyA.jpg"/>
                    </div>
                </div>
            </div>
            <div class="ml-4 w-1/4">
                <div class="mb-4">
                    <p class="text-red-500 line-through">{{ $room->price }} VND</p>
                    <p class="text-2xl font-bold text-red-600">{{ $room->discount }} VND</p>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-yellow-500"></i>
                    <i class="fas fa-star text-gray-300"></i>
                </div>
                <button class="bg-teal-500 text-white px-4 py-2 rounded w-full mb-2">BOOK NOW</button>
                <button class="bg-teal-500 text-white px-4 py-2 rounded w-full flex items-center justify-center">
                    <i class="fas fa-book"></i>
                </button>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="flex-1">
                <h2 class="text-xl font-bold mb-2">Phòng VIP - Đỉnh cao sang trọng và dịch vụ đẳng cấp</h2>
                <p class="mb-4">Phòng VIP mang đến không gian nghỉ dưỡng tinh tế với các trang thiết bị hiện đại, dịch vụ phòng tận tình chu đáo. Không gian rộng rãi, thoáng đãng với thiết kế sang trọng, đẳng cấp. Phòng VIP là sự lựa chọn hoàn hảo cho những ai muốn tận hưởng kỳ nghỉ dưỡng đẳng cấp.</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Diện tích phòng: 50m²</li>
                    <li>Giường: 1 giường đôi lớn</li>
                    <li>Phòng tắm: Bồn tắm và vòi sen</li>
                    <li>Ban công: Có</li>
                    <li>Hướng phòng: Hướng thành phố</li>
                    <li>Tiện nghi: TV, điều hòa, minibar, két sắt, bàn làm việc</li>
                    <li>Wifi: Miễn phí</li>
                </ul>
            </div>
            <div class="bg-gray-100 p-4 rounded w-1/4">
                <h3 class="font-bold mb-2">Tiện ích phòng</h3>
                <ul class="list-disc list-inside">
                    <li>Điều hòa</li>
                    <li>Chỗ đậu xe</li>
                    <li>Nhà hàng</li>
                    <li>Wi-Fi tốc độ cao</li>
                </ul>
            </div>
        </div>
        <div class="mb-4">
            <h3 class="font-bold mb-2">Comment</h3>
            <input class="w-full p-2 border rounded mb-2" placeholder="Write here..." type="text"/>
            <button class="bg-orange-500 text-white px-4 py-2 rounded">Review</button>
        </div>
        <div class="mb-4">
            @if($reviews->isEmpty())
                <p>No Reviews</p>
            @else
                @foreach($reviews as $review)
                <div class="flex items-center mb-2">
                    <img alt="User profile picture" class="w-10 h-10 rounded-full mr-2" src="{{ $review->user->avatar }}user"/>
                    <div>
                        <p class="font-bold">{{ $review->user->name }}</p>
                        <p>{{ $review->comment }}</p>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div>
            <h3 class="font-bold mb-2">Related Hotels</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @if($relatedRooms->isEmpty())
                <p>No Related rooms</p>
                @else
                    @foreach($relatedRooms as $related)
                        <div class="bg-white shadow-md rounded p-2">
                            <img alt="Hotel image" class="w-full h-32 object-cover rounded mb-2" src="{{ $related->image }}"/>
                            <p class="font-bold">{{ $related->name }}</p>
                            <p class="text-gray-600">{{ $related->price }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
</body>
</html>
{{-- @endsection --}}