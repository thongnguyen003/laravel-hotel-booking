@extends('template.authenticated-interface')
@section('content')
<div class="content" id="content">
    <ul class="breadcrumb-profile">
        <li><a href="home.html">Home</a></li>
        <li><a href="#">Profile</a></li>
    </ul>
    <div class="profile-info">
        <form>
            <label for="name">User Name:</label>
            <input type="text" id="name" placeholder="Name" value="{{ $user->name }}" readonly>

            <label for="phone">User Phone:</label>
            <input type="text" id="phone" placeholder="Phone number" value="{{ $user->phone }}" readonly>

            <label for="age">User Age:</label>
            <input type="text" id="age" placeholder="Age" value="{{ $user->day_of_birth }}" readonly>

            <label for="email">User Email:</label>
            <input type="email" id="email" placeholder="Email" value="{{ $user->email }}" readonly>
        </form>
        <div class="btn-edit-profile">
        <button onclick="window.location.href='/profile/edit'">Edit</button>
        </div>
    </div>
</div>
@endsection