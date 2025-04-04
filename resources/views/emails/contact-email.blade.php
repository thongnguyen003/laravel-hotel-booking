<head>
    <title>Quintessence Hotel Customer Contact Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            border-radius: 10px 10px 0 0;
        }

        .content {
            padding: 20px;
            color: #333;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .footer {
            background-color: #eee;
            padding: 10px;
            text-align: center;
            border-radius: 0 0 10px 10px;
            font-size: 14px;
            color: #555;
        }

        .highlight {
            font-weight: bold;
            color: #ff7e5f;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            📩 New Contact Form Submission
        </div>
        <div class="content">
            <p><strong>Fullname:</strong> <span class="highlight">{{ $data['fullname'] }}</span></p>
            <p><strong>Email:</strong> <span class="highlight">{{ $data['email'] }}</span></p>
            <p><strong>Message:</strong></p>
            <p style="background-color: #f9f9f9; padding: 10px; border-left: 5px solid #ff7e5f;">{{ $data['message'] }}</p>
        </div>
        <div class="footer">
            Thank you for reaching out! We'll get back to you soon. 🚀
        </div>
    </div>
</body>