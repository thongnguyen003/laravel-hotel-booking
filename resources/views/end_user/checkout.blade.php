<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS (Bundle includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Đặt nút Back to Payment Method ở góc phải trên cùng */
        #backToMethod {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
<form action="{{ route('booking.show') }}" method="POST">
@csrf
<div class="container mt-4">
    <div class="row">
        <!-- Thông tin khách hàng -->
        <div class="col-md-8">
            <div class="card p-3">
                <h5>Customer Information</h5>
                <div class="mb-3">
                    <label class="form-label">Name *</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone *</label>
                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                </div>
            </div>
        </div>

        <!-- Thông tin đặt phòng -->
        <div class="col-md-4">
            <div class="card p-3">
                <h5>Booked Rooms: <strong>{{ $rooms->count() }} rooms</strong></h5>

                @if ($checkinDate && $checkoutDate)
                    <p>{{ $checkinDate }} - {{ $checkoutDate }} ({{ $nights }} nights)</p>
                @endif

                <input type="hidden" name="checkin_date" value="{{ $checkinDate }}">
                <input type="hidden" name="checkout_date" value="{{ $checkoutDate }}">
                <input type="hidden" name="nights" value="{{ $nights }}">
                <input type="hidden" name="total_price" value="{{ $totalPrice }}">

                @foreach ($rooms as $room)
                    <p><strong>{{ $room->name }}</strong> - <span class="text-primary">${{ $room->price }}</span></p>
                    <input type="hidden" name="rooms[]" value="{{ $room->name }} - ${{ $room->price }}">
                @endforeach

                <hr>
                <p><strong>Total: ${{ $totalPrice }}</strong></p>

                <!-- Nút Book Now -->
                <div class="d-grid mt-2">
                    <button class="btn btn-primary" type="submit">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs mt-4" id="paymentTab">
        <li class="nav-item">
            <a class="nav-link active" id="method-payment-tab" data-bs-toggle="tab" href="#method-payment">Method Payment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="payment-gateway-tab" data-bs-toggle="tab" href="#payment-gateway">Payment Gateway</a>
        </li>
    </ul>

    <!-- Nội dung tab -->
    <div class="tab-content mt-3">
        <!-- Tab Method Payment -->
        <div class="tab-pane fade show active" id="method-payment">
            <div class="card p-3">
                <h5>Select Payment Method</h5>
                <div class="form-check">
                    <input type="radio" name="payment" id="option1" class="form-check-input" value="1" required>
                    <label class="form-check-label" for="option1"><strong>Pay later</strong></label>
                    <p>Pay the total and you are all set</p>
                </div>
                <div class="form-check">
                    <input type="radio" name="payment" id="option2" class="form-check-input" value="2">
                    <label class="form-check-label" for="option2"><strong>Pay in part now</strong></label>
                    <p>Pay $207.43 now, and the rest ($207.43) will be auto-charged later.</p>
                </div>
                <div class="form-check">
                    <input type="radio" name="payment" id="option3" class="form-check-input" value="3">
                    <label class="form-check-label" for="option3"><strong>Pay in full now</strong></label>
                    <p>Pay $207.43 now, and the rest ($207.43) will be auto-charged later.</p>
                </div>
            </div>
        </div>

        <!-- Tab Payment Gateway -->
        <div class="tab-pane fade" id="payment-gateway">
            <div class="card p-3">
                <h5>Payment Gateway</h5>
                @foreach ($payment_gateways as $gateway)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_gateway" id="gateway{{ $gateway->id }}" value="{{ $gateway->id }}" required>
                        <label class="form-check-label" for="gateway{{ $gateway->id }}">
                            <strong>{{ $gateway->name }}</strong><br>
                            {{ $gateway->description }}
                        </label>
                    </div>
                @endforeach

                <button class="btn btn-secondary" id="backToMethod" type="button">Back to Payment Method</button>
            </div>
        </div>
    </div>
</div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy radio button và tab
        const option1 = document.getElementById("option1");
        const option2 = document.getElementById("option2");
        const option3 = document.getElementById("option3");
        const methodTab = document.getElementById("method-payment-tab");
        const gatewayTab = document.getElementById("payment-gateway-tab");
        const backToMethodBtn = document.getElementById("backToMethod");

        // Lấy trạng thái từ localStorage
        const savedOption = localStorage.getItem("selectedPaymentOption");

        // Đặt lại trạng thái radio button
        if (savedOption === "2") {
            option2.checked = true;
            gatewayTab.click();
        } else if (savedOption === "3") {
            option3.checked = true;
            gatewayTab.click();
        } else {
            option1.checked = true;
            methodTab.click();
        }

        // Sự kiện khi chọn radio button
        option1.addEventListener("change", function () {
            localStorage.setItem("selectedPaymentOption", "1");
            methodTab.click();
        });

        option2.addEventListener("change", function () {
            localStorage.setItem("selectedPaymentOption", "2");
            gatewayTab.click();
        });

        option3.addEventListener("change", function () {
            localStorage.setItem("selectedPaymentOption", "3");
            gatewayTab.click();
        });

        // Sự kiện khi nhấn nút quay lại
        backToMethodBtn.addEventListener("click", function () {
            methodTab.click();
            // Giữ trạng thái radio button của "Payment Method" khi quay lại
            if (savedOption === "2") {
                option2.checked = true;
            } else if (savedOption === "3") {
                option3.checked = true;
            } else {
                option1.checked = true;
            }
        });
    });
</script>
</body>
</html>
