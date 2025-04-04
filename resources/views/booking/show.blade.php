<!-- resources/views/booking/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="card p-3">
        <h3>Booking Confirmation</h3>

        <!-- Hiển thị thông tin khách hàng -->
        <p><strong>Name:</strong> {{ $customerInfo['name'] }}</p>
        <p><strong>Email:</strong> {{ $customerInfo['email'] }}</p>
        <p><strong>Phone:</strong> {{ $customerInfo['phone'] }}</p>

        <!-- Hiển thị thông tin phòng -->
        <h5>Booked Rooms:</h5>
        <ul>
            @foreach($roomInfo['rooms'] as $room)
                <li>{{ $room }} - ${{ $roomInfo['total_price'] / count($roomInfo['rooms']) }}</li>
            @endforeach
        </ul>
        <p><strong>Check-in Date:</strong> {{ $roomInfo['checkin_date'] }}</p>
        <p><strong>Check-out Date:</strong> {{ $roomInfo['checkout_date'] }}</p>
        <p><strong>Total Price:</strong> ${{ $roomInfo['total_price'] }}</p>

        <!-- Hiển thị thông tin thanh toán -->
        <h5>Payment Information:</h5>
        <p><strong>Payment Method:</strong> 
            @if($paymentInfo['payment_method'] == 1) Pay Later
            @elseif($paymentInfo['payment_method'] == 2) Pay in part now
            @elseif($paymentInfo['payment_method'] == 3) Pay in full now
            @endif
        </p>
        <p><strong>Payment Gateway:</strong> {{ $paymentInfo['payment_gateway'] }}</p>
    </div>
</div>
</body>
</html>
