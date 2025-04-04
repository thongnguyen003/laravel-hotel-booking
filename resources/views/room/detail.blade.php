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
        </div>
        <div class="flex mb-4">
            <div class="flex-1">
                <div class="flex mb-4 relative">
                    <img alt="Hình ảnh chính của khách sạn" class="w-2/3 h-64 object-cover mr-2" src="{{ $room->image }}"/>
                    <div class="grid grid-cols-1 gap-1 w-1/3">
                        @if(count($slides) > 0)
                            <div class="relative">
                                <img alt="Hình ảnh phòng" class="w-full h-32 object-cover mb-1" src="{{ $slides[0]->image_url }}"/>
                            </div>
                        @endif
        
                        @if(count($slides) > 1)
                            <div class="relative">
                                <img alt="Hình ảnh phòng" class="w-full h-32 object-cover mb-1" src="{{ $slides[1]->image_url }}"/>
                                @if(count($slides) > 2)
                                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 cursor-pointer" onclick="showAllImages()">
                                        <span class="text-xl font-bold text-white">+{{ count($slides) - 2 }}</span>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        
            <!-- Popup để hiển thị tất cả ảnh -->
            <div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white p-4 rounded">
                    <span class="cursor-pointer" onclick="closeModal()">X</span>
                    <div class="grid grid-cols-3 gap-2 mt-2">
                        @foreach($slides as $slide)
                            <img alt="Hình ảnh phòng" class="w-full h-32 object-cover" src="{{ $slide->image_url }}"/>
                        @endforeach
                    </div>
                </div>
            </div>
        
            <script>
                function showAllImages() {
                    document.getElementById('imageModal').classList.remove('hidden');
                }
        
                function closeModal() {
                    document.getElementById('imageModal').classList.add('hidden');
                }
            </script>
        
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
                <form action="{{ route('rooms.mark', $room->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded w-full flex items-center justify-center">
                        @if ($room->markings()->where('user_id', auth()->user()->id)->exists())
                            <i class="fas fa-book"> unmark</i>
                        @else
                            <i class="fas fa-book"> Mark</i>
                        @endif
                    </button>
                </form>
            </div>
        </div>
        <div class="flex mb-4">
            <div class="flex-1">
                <h2 class="text-xl font-bold mb-2">Phòng VIP - Đỉnh cao sang trọng và dịch vụ đẳng cấp</h2>
                <p class="mb-4">{{ $room->description }}</p>

            </div>
            <div class="bg-gray-100 p-4 rounded w-1/4">
                <h3 class="font-bold mb-2">Tiện ích phòng</h3>
                @foreach($services as $service)
                    <li>{{ $service->serv_name }}</li>
                @endforeach
            </div>
        </div>
        <div class="mb-4">
            <h3 class="font-bold mb-2">Review</h3>
            <form action="{{ route('rooms.reviews.add', $room->id) }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <textarea class="w-full p-2 border rounded mb-2" placeholder="Write here..." name="comment" required></textarea>
                <select name="rating" required class="mb-2">
                    <option value="">Rate this room</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
                <button class="bg-orange-500 text-white px-4 py-2 rounded" type="submit">Review</button>
            </form>
        </div>
        
        <div class="mb-4">
            @if($reviews->isEmpty())
                <p>No Reviews</p>
            @else
            @foreach($reviews as $review)
            <div class="flex items-center mb-2">
                <img alt="User profile picture" class="w-10 h-10 rounded-full mr-2" src="{{ $review->user->avatar ?? 'default_avatar.png' }}" />
                <div>
                    <p class="font-bold">{{ $review->user->name }}</p>
                    <p>{{ $review->comment }}</p>
                    <div class="flex items-center">
                        @for ($i = 1; $i <= $review->rating; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 15.27L16.18 19l-1.64-7.03L19 9.24l-7.19-.61L10 2 8.19 8.63 1 9.24l5.46 2.73L5.82 19z"/>
                            </svg>
                        @endfor
                        @for ($i = $review->rating + 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 15.27L16.18 19l-1.64-7.03L19 9.24l-7.19-.61L10 2 8.19 8.63 1 9.24l5.46 2.73L5.82 19z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>
        @endforeach
        
        <!-- Phân trang -->
        <div class="mt-4">
            {{ $reviews->links() }} <!-- Hiển thị liên kết phân trang -->
        </div>
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
                            <a href="{{ route('rooms.detail', $related->id) }}">
                                <img alt="Hotel image" class="w-full h-32 object-cover rounded mb-2" src="{{ $related->image }}"/>
                            </a>
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