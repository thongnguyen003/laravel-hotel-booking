@extends('template.authenticated-interface')
@section('content')
<div class="content" id="content">
    <div class="container-booked">
        <!-- Filter Options -->
        <div class="filter-booked">
            <label>
                <input type="radio" name="filter" value="all" checked onchange="filterRooms()"> All booked room
            </label>
            <label>
                <input type="radio" name="filter" value="reserved" onchange="filterRooms()"> Reserved room
            </label>
            <label>
                <input type="radio" name="filter" value="cancel" onchange="filterRooms()"> Cancel room
            </label>
        </div>

        <!-- Rooms List -->
        <div class="rooms">
            <!-- Example Room Card -->
            <div class="room-card" data-status="all">
                <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 101">
                <div class="room-info">
                    <h3>Phòng 101</h3>
                    <p class="price">100.000 đ</p>
                </div>
                <div class="action-group">
                    <p class="date">20/12/2025</p>
                    <button class="cancel-btn">Hủy</button>
                </div>
            </div>
            <div class="room-card" data-status="reserved">
                <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 102">
                <div class="room-info">
                    <h3>Phòng 102</h3>
                    <p class="price">150.000 đ</p>
                </div>
                <div class="action-group">
                    <p class="date">21/12/2025</p>
                    <button class="cancel-btn">Hủy</button>
                </div>
            </div>
            <div class="room-card" data-status="cancel">
                <img src="https://rosamiahotel.com/FileUpload/Images/mat_tien_.jpg" alt="Room 103">
                <div class="room-info">
                    <h3>Phòng 103</h3>
                    <p class="price">200.000 đ</p>
                </div>
                <div class="action-group">
                    <p class="date">22/12/2025</p>
                    <button class="cancel-btn">Hủy</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-booked -->
</div><!--Content -->

<script>
    // JavaScript Function to Filter Rooms Based on Status
    function filterRooms() {
        const selectedFilter = document.querySelector('input[name="filter"]:checked').value;
        const roomCards = document.querySelectorAll('.room-card');

        roomCards.forEach(card => {
            const status = card.getAttribute('data-status');
            if (selectedFilter === 'all' || status === selectedFilter) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }
</script>
@endsection