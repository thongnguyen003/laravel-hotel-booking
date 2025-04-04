<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Abhaya Libre', serif;
        }

        .form-label {
            font-weight: bold;
            font-size: 25px;
        }

        .custom-input {
            font-size: 20px;
            padding: 20px;
            width: 100%;
            border: 2px solid #ddd;
            border-radius: 10px;
            transition: border 0.3s;
            font-size: 30px;
        }

        .custom-input::placeholder {
            font-size: 20px;
            color: #aaa;
        }

        .custom-input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.3);
        }

        .form-group {
            margin-bottom: 24px;
        }

        .btn-primary {
            font-size: 22px;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .custom-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col items-center bg-white">
        <!-- Header Section -->
        <div class="relative w-full">
            <img alt="Hotel room with elegant decor" class="w-full h-96 object-cover" height="700px" src="https://storage.googleapis.com/a1aa/image/_4fXl3P7vO7dZYv7n4vWvQevr-Cb-2nU1j7MhaxsUXQ.jpg" width="1200" />
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 text-white text-center px-4">
                <h2 class="custom-heading mb-4">Contact us</h2>
                <p class="text-2xl">Quintessence Hotel – Where Excellence Meets Elegance!</p>
                <p class="text-2xl">📞 Phone: 0376268765</p>
                <p class="text-2xl">✉️ Email: quintessenceQ@gmail.com</p>
                <p class="text-2xl">📍 Address: 99 Tô Hiến Thành - Mỹ Khê - Đà Nẵng City</p>
                <p class="text-2xl">🕒 Hours: 8:00 - 17:00, Mon - Sat</p>
                <p class="text-2xl">Feel free to reach out for reservations, inquiries, or assistance. We're here to make your experience exceptional!</p>
            </div>
        </div>
        <!-- Contact Form Section -->
        <div class="w-full max-w-4xl bg-white p-8 mt-8 shadow-md">
            @if(session('success'))
            <div id="alert-success" class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label" for="fullname">Fullname</label>
                        <input class="custom-input border rounded-lg focus:outline-none text-black focus:ring-2 focus:ring-blue-500" id="fullname" name="fullname" placeholder="e.g. John Becker" type="text" required />
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <label class="form-label" for="email">Email</label>
                        <input class="custom-input border rounded-lg focus:outline-none text-black focus:ring-2 focus:ring-blue-500" id="email" name="email" placeholder="johnbecker@gmail.com" type="email" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="custom-input border rounded-lg focus:outline-none text-black focus:ring-2 focus:ring-blue-500" id="message" name="message" placeholder="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <!-- Google Map Section (Google Maps Iframe) -->
        <div class="w-full mt-8 mb-36">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.121406777892!2d108.2435094!3d16.05918849999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177ed575157d%3A0xa54585cda5d67ac7!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1743649581943!5m2!1svi!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <script>
            setTimeout(() => {
                let alertBox = document.getElementById('alert-success');
                if (alertBox) {
                    alertBox.style.transition = "opacity 0.5s ease";
                    alertBox.style.opacity = "0";
                    setTimeout(() => {
                        alertBox.style.display = "none";
                    }, 500);
                }
            }, 2000);
        </script>
    </div>
</body>