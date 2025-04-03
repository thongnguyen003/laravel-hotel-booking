<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Abhaya Libre', serif;
        }

        .header-title {
            font-family: 'Abhaya Libre', serif;
        }

        .slider {
            position: relative;
            width: 100%;
            height: 600px;
            object-fit: cover;
            overflow: hidden;
        }

        .slides {
            display: flex;
            object-fit: cover;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            height: 1500px;
            object-fit: cover;
        }

        .list-about {
            font-size: 20px;
        }

        .section {
            padding: 4rem 1rem;
        }

        @media (min-width: 768px) {
            .section {
                padding: 4rem 2rem;
            }
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Header Section -->
    <header class="relative">
        <img alt="Hotel view with palm trees and pool" style="height:500px; width: 100%;" class=" object-cover" src="https://storage.googleapis.com/a1aa/image/XbRXOzgcYXMuyUJgXYHMGNW1Fy2TLAVkKOo6HnCPvyE.jpg" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="header-title text-6xl font-bold">Quintessence</h1>
                <p class="text-3xl mt-2">HOTEL &amp; RESORT</p>
                <p class="text-2xl mt-2">Experience the epitome of luxury and comfort at our world-class hotel.</p>
            </div>
        </div>
    </header>
    <!-- About Section -->
    <section class="section">
        <h2 class="text-4xl font-bold mb-8 text-center mr-96">
            <span class="text-black">About</span> <span class="text-blue-900">Quintessence Hotel</span>
        </h2>
        <div class="md:flex md:space-x-8">
            <div class="md:w-2/3">
                <ul class="list-none list-inside space-y-3 list-about ml-40 text-xl">
                    <li>Quintessence Hotel – Where Excellence Meets Elegance!</li>
                    <li>🏨 A perfect blend of luxury, comfort, and tranquility, Quintessence Hotel offers a sophisticated design, cozy ambiance, and top-tier services for an unforgettable stay.</li>
                    <li>🌟 Why Choose Us?</li>
                    <li>✔ Luxurious Space: Modern architecture with natural beauty.</li>
                    <li>✔ Thoughtful Service: A professional team dedicated to your comfort.</li>
                    <li>✔ Premium Facilities: Swimming pool, spa, 5-star restaurant, and modern gym.</li>
                    <li>✔ Prime Location: Near the city center with easy access to attractions.</li>
                    <li>🤝 Meet Our Team</li>
                    <li>🔹 Loan – Visionary leader, ensuring an exceptional guest experience.</li>
                    <li>🔹 Thủy – Operations expert, keeping everything seamless.</li>
                    <li>🔹 Hậu – Creative architect, crafting elegant spaces.</li>
                    <li>🔹 Thông – Culinary specialist, delivering exquisite flavors.</li>
                    <li>🔹 Hiệp – Event manager, creating unforgettable moments.</li>
                    <li>📍 Experience elegance at Quintessence Hotel – Your comfort, our priority!</li>
                </ul>
            </div>
            <div class="md:w-1/3 mt-8 md:mt-0 mr-5">
                <img alt="Hotel exterior view" class="w-full h-64 object-cover rounded-lg shadow-md mb-4" src="https://storage.googleapis.com/a1aa/image/AbMocKkLyD-oZa9sVTrusz-PDue57fMY_CIn3rL-kac.jpg" />
                <div class="grid grid-cols-2 gap-4">
                    <img alt="Hotel room view" class="w-full h-32 object-cover rounded-lg shadow-md" src="https://storage.googleapis.com/a1aa/image/NghRrYBoZPe1QOcRtthuxMezwa6hKMH8fotezH4i7dM.jpg" />
                    <img alt="Hotel room view" class="w-full h-32 object-cover rounded-lg shadow-md" src="https://decoxdesign.com/upload/images/allison-villa-180m2-phong-ngu-master-16-decox-design.jpg" />
                </div>
                <img alt="Hotel exterior view" class="w-full h-64 object-cover mt-4 rounded-lg shadow-md" src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/211/2019/11/29021737/Luxury-Room-King-Bed-1170x780.jpg" />
            </div>
        </div>
    </section>
    <!-- Luxury Redefined Section -->
    <section class="section">
        <div class="md:flex md:space-x-8">
            <div class="md:w-1/2 flex items-center">
                <img alt="Luxury hotel room" class="w-full max-h-96 object-cover mb-4 rounded-lg shadow-md" src="https://noithatmanhhe.vn/wp-content/uploads/2024/03/23-phong-ngu-master-luxury.jpg" />
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <h3 class="text-4xl text-black font-bold mb-4 mt-40">Luxury redefined</h3>
                <p class="text-xl text-black">Experience the epitome of luxury and comfort at our world-class hotel. Our luxurious rooms are designed to transport you into an environment made for leisure. Take your mind off the day-to-day of home life and find a private paradise for yourself.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-7">
            <div class="flex flex-col justify-center order-2 md:order-1">
                <h3 class="text-4xl text-black font-bold mb-4 ">Leave your worries in the sand</h2>
                    <p class="text-xl text-black">We love life at the beach. Being close to the ocean with access to endless sandy beach ensures a relaxed state of mind. It seems like time stands still watching the ocean.</p>
            </div>
            <div class="order-1 md:order-2">
                <img alt="A beautiful beach with clear blue water, palm trees, and people enjoying the sun" class="w-full max-h-96 object-cover mb-4 rounded-lg shadow-md" src="https://storage.googleapis.com/a1aa/image/Df4UfrMa64C5hFn5l7R8GMqEOi2evVWgEekrogXCAHg.jpg" />
            </div>
        </div>
    </section>

    <!-- Rooms and Rates Section -->
    <div class="max-w-[70%] mx-auto">
        <h3 class="text-4xl text-black font-bold mb-4 mt-4 text-center">ROOMS AND RATES</h3>
        <p class="text-center text-black mb-8 text-xl">
            Each of our bright, light-flooded rooms come with everything you could possibly need for a comfortable stay.
            And if you book on our website, breakfast is included with your room rate.
            We provide complimentary wireless internet access in all guest rooms and public areas.
            By the time of your arrival, we will have your room ready with fresh towels and linens.
        </p>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A cozy single room with a bed, plants, and a window letting in natural light" class="w-full h-[600px]" src="https://noithatkendesign.vn/storage/app/media/uploaded-files/khong-gian-phong-ngu-EX-Da-Nang-Luxury-Hotel.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A cozy single room with a bed, plants, and a window letting in natural light" class="w-full h-[600px]" src="https://product.hstatic.net/1000405477/product/mai_suite_001_bd98099855ef4d44a31ce71f5285ce16.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A cozy single room with a bed, plants, and a window letting in natural light" class="w-full h-[600px]" src="https://storage.googleapis.com/td-robb-media/2020/03/MAIHOUSE-9-1024x576.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A cozy single room with a bed, plants, and a window letting in natural light" class="w-full h-[600px]" src="https://khachsandep.vn/storage/files/0%200%20%20bi%20quyet%20thiet%20ke%20homestay%20dep/0%20phan%20biet%20cac%20loai%20phong%20khach%20san/phan-biet-cac-loai-phong-khach-san-phong-deluxe.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A cozy single room with a bed, plants, and a window letting in natural light" class="w-full h-[600px]" src="https://khachsandep.vn/storage/files/0%200%20%20bi%20quyet%20thiet%20ke%20homestay%20dep/0%20phong%20suite%20trong%20khach%20san/phong-deluxe-suite-trong-khach-san.jpg" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">SINGLE ROOM</div>
        </div>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A spacious double room with a large bed, desk, and a window with a view" class="w-full h-[600px]" src="https://storage.googleapis.com/a1aa/image/0cvA6ciPntvXMHM6HNc7_AnHbqwE_yWpD8xvqL6LLeI.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A spacious double room with a large bed, desk, and a window with a view" class="w-full h-[600px]" src="https://captownhotel.com/wp-content/uploads/2015/03/JOH02294-FILEminimizer.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A spacious double room with a large bed, desk, and a window with a view" class="w-full h-[600px]" src="https://wahfupalace.com/wp-content/uploads/2023/05/giuong-ngu-trong-khach-san-1.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A spacious double room with a large bed, desk, and a window with a view" class="w-full h-[600px]" src="https://eholiday.vn/wp-content/uploads/2023/05/Khach-san-Muong-Thanh-Luxury-Sai-Gon-phong-twin.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A spacious double room with a large bed, desk, and a window with a view" class="w-full h-[600px]" src="https://vanangroup.com.vn/wp-content/uploads/2024/01/Giuong-doi-khach-san-lon-phu-hop-voi-khong-gian-rong.png" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">DOUBLE ROOM</div>
        </div>
        <h2 class="text-center text-4xl font-extrabold mb-4">FACILITIES</h2>
        <p class="text-center text-black text-xl mb-8">
            We want you to enjoy your stay here in total comfort. That’s why we give special attention to every tiny detail.
            We provide a range of facilities to make your stay as enjoyable as possible.
            Our gym is open 24/7, and our friendly staff are on hand to assist you with any needs you may have.
        </p>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://wyndhamdananggoldenbay.com/wp-content/uploads/2023/04/golden-fitness-center.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://ptfitness.vn/wp-content/uploads/2021/06/setup-phong-tap-the-hinh-gym-cho-khach-san-maximilan-da-nang-beach-hotel-p1.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://vantaydecor.com/wp-content/uploads/2023/11/Khong-gian-phong-gym-phai-co-du-dien-tich-de-bo-tri-cac-thiet-bi-tap-gym.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://acihome.vn/uploads/15/goi-y-thiet-ke-phong-gym-khach-san-hien-dai-va-sang-tao.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://miracleluxuryhotel.vn/uploads/Gym/Gym.jpg" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">THE GYM</div>
        </div>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://www.wink-hotels.com/wp-content/uploads/2025/02/z6325219290081_ae0326ca4f0cf3adc6f2341bd16a2d45-1024x699.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://tcptravel.com/wp-content/uploads/2024/07/445760074.jpeg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://product.hstatic.net/1000067077/product/bar2_63ca30175e324a858f97664878227bce_master.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://product.hstatic.net/1000067077/product/bar1_24d5691c4a3d48b9b774e5cc7a42f3cf_master.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://www.chudu24.com/wp-content/uploads/2017/11/1-68.jpg" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">POOLSIDE BAR</div>
        </div>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://ticotravel.com.vn/wp-content/uploads/2022/12/Muong-Thanh-Bac-Ninh.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://hellotrip.vn/wp-content/uploads/2025/02/dich-vu-massage-tai-cac-khach-san-muong-thanh-da-nang-91108.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://eholiday.vn/wp-content/uploads/2023/10/Khach-san-Muong-Thanh-Grand-Lao-Cai-dich-vu-spa-1-600x399.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://thegrandhotram.com/wp-content/uploads/2021/11/The-Grand-The-Grand-Spa-3.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://travelmart.vn/uploads/2018/03/29/20_i5abc46b1b5e49.jpg" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">THE SPA</div>
        </div>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://png.pngtree.com/background/20231101/original/pngtree-breathtaking-3d-rendering-of-oceanfront-villa-with-serene-sunset-view-and-picture-image_5824264.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://png.pngtree.com/background/20230625/original/pngtree-luxury-seaside-hotel-visualizing-lounge-and-swimming-pool-through-3d-rendering-picture-image_4039153.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://acihome.vn/uploads/15/thiet-ke-khach-san-hien-dai-sang-trong-cao-20-tang-co-ho-boi-san-thuong-radiant-hotel-5.JPG" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://www.lottehotel.com/content/dam/lotte-hotel/lotte/hanoi/facilities/fitness-spa/evianspa/fac-LTHA-indoor-pool-1.jpg.thumb.1920.1920.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://png.pngtree.com/thumb_back/fh260/background/20230705/pngtree-modern-house-boasting-a-poolside-terrace-with-sun-loungers-3d-rendered-image_3752693.jpg" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">SWIMMING POOL</div>
        </div>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://watermark.lovepik.com/photo/20211120/large/lovepik-a-deluxe-hotel-restaurant-picture_500481100.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://watermark.lovepik.com/photo/20211207/large/lovepik-hotel-restaurant-window-location-picture_501550956.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://decoxdesign.com/upload/images/thiet-ke-noi-that-nha-hang-khach-san-18-decox-design.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://noithatmienbac.vn/wp-content/uploads/2023/12/nha-hang-khach-san-phong-cach-dong-duong.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://ezcloud.vn/wp-content/uploads/2022/09/kinh-doanh-nha-hang-khach-san.webp" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">RESTAURANT</div>
        </div>
        <div class="mb-8">
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://deltech.vn/upload/images/laundry-la-gi%20(2).jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://deltech.vn/upload/images/laundry-la-gi%20(1).jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-[600px]" src="https://static2.viecngay.vn/article_images/shutterstock_654521557-d53914dded9ccc3620a821a0b86fce07-619b64a47f008.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://dyf.vn/wp-content/uploads/2021/11/Bo-phan-Housekeeping-co-quy-trinh-lam-viec-nhu-the-nao.jpg" />
                    </div>
                    <div class="slide">
                        <img alt="A well-equipped gym with various exercise machines and weights" class="w-full h-auto" src="https://nemtotgiare.com/upload/images/ga-trai-giuong.jpg" />
                    </div>
                </div>
            </div>
            <div class="bg-blue-900 text-white text-center py-2 text-2xl font-extrabold">LAUNDRY</div>
        </div>
    </div>
    <script>
        let currentIndex = 0;
        const sliders = document.querySelectorAll('.slides');
        const totalSlides = sliders[0].children.length;

        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            sliders.forEach(slide => {
                slide.style.transform = `translateX(-${currentIndex * 100}%)`;
            });
        }, 2000);
    </script>
</body>