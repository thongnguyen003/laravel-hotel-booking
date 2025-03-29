@extends('template.authenticated-interface')
@section('content')
<div class="content" id="content">
    <div class="profile-info">
        <form action="" method="POST">
            @csrf
            @include('error')
            <label for="name">User Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" value="{{ $user->name }}" >

            <label for="phone">User Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="Phone number" value="{{ $user->phone }}" >

            <label for="gender">User Gender:</label>
            <select class="gender_profile" name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="birth">User Day Of Birth:</label>
            <div class="birthday-input">
                <input value="{{ isset($user->data_parts) ? $user->data_parts['day'] : 1 }}" type="number" name="day" placeholder="Day" min="1" max="31" class="day-input">
                <input value="{{ isset($user->data_parts) ? $user->data_parts['month'] : 1 }}" type="number" name="month" placeholder="Month" min="1" max="12" class="month-input">
                <input value="{{ isset($user->data_parts) ? $user->data_parts['year'] : 1900 }}" type="number" name="year" placeholder="Year" min="1900" max="2100" class="year-input">
            </div>
            <p id="error-msg" style="color: red;"></p>

            <label for="email">User Email:</label>
            <input type="email" id="email" placeholder="Email" value="{{ $user->email }}" readonly>
            <button type="submit">update</button>
        </form>
    </div>
</div>
<script>
const dayInput = document.querySelector('.day-input');
const monthInput = document.querySelector('.month-input');
const yearInput = document.querySelector('.year-input');
const errorMsg = document.getElementById('error-msg');

function getDaysInMonth(month, year) {
  if (month < 1 || month > 12) return 31; 
  return new Date(year, month, 0).getDate();
}

function validateDate() {
  const day = parseInt(dayInput.value, 10);
  const month = parseInt(monthInput.value, 10);
  const year = parseInt(yearInput.value, 10);

  if (isNaN(month) || isNaN(year)) return; 

  const maxDays = getDaysInMonth(month, year);

  if (day > maxDays) {
    errorMsg.textContent = `Tháng ${month} năm ${year} chỉ có ${maxDays} ngày!`;
    dayInput.value = maxDays; 
    event.preventDefault();// Ngăn gửi form
  } else {
    errorMsg.textContent = ''; 
  }
}

dayInput.addEventListener('input', validateDate);
monthInput.addEventListener('input', validateDate);
yearInput.addEventListener('input', validateDate);
</script>
@endsection