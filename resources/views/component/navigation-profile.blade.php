<div class="container-navigation">
        <div class="profile-card">
            <img src="{{ $user->avatar 
            ? asset('storage/avatars/' . $user->avatar) 
            : 'https://img.tripi.vn/cdn-cgi/image/width=700,height=700/https://gcs.tripi.vn/public-tripi/tripi-feed/img/474053FoG/hinh-nguoi-that-de-thuong_043419682.jpg' }}" 
            alt="Profile Picture" 
            class="profile-pic">
            <button class="upload-btn">change</button>
        </div>
        <form action="/profile/update_avatar" method="POST" enctype="multipart/form-data" class="from_avatar avatar_profile">
                @csrf
                <label for="image">Upload Image:</label>
                <input type="file" name="avatar" id="image"  required>
                <button type="submit">Upload</button>
        </form>
        <br>
        <div class="buttons box-navigation">
            <button onclick="window.location.href='/profile/'">Profile</button>
            <button onclick="window.location.href='/profile/marked_room'">Mark</button>
            <button onclick="window.location.href='/profile/booked_room'">History</button>
        </div>
        <div class="btn-logout">
            <button onclick="window.location.href='/logout'">Log out</button>
        </div>
</div>
<script>
    var button_form_image = document.querySelector('.upload-btn');
    button_form_image.addEventListener('click', function(){
        document.querySelector('.from_avatar').classList.toggle("avatar_profile");
    })
</script>