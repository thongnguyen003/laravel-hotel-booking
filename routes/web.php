<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fake_user;


// Trang chủ trang web
Route::get('/',[k::class,'index']);
// Trang đăng ký người dùng
Route::get ('/register',[k::class,'register'])->name('register');

// Trang đăng nhập người dùng
Route::get('/login',[k::class,'login'])->name('log-in');

// Nhóm các route có tiền tố là là profile và cần đăng nhập mới truy cập được
Route::prefix('profile')->group(function(){
    // Trang hồ sơ các nhân
    Route::get('/',[Fake_user::class,'profile'])->name('profile');

    // Trang cập nhập hồ sơ người dùng
    Route::get('/edit',[Fake_user::class,'edit_profile'])->name('edit_profile');

    // Cập nhật hồ sơ người dùng
    Route::post('/update',[Fake_user::class,'update_profile'])->name('update_profile');
    Route::post('/update_avatar',[Fake_user::class,'update_avatar_profile'])->name('update_avatar_profile');

    // Trang danh sách phòng đánh dấu
    Route::get('/marked_room',[Fake_user::class,'marked_room'])->name('mark');

    // Trang danh sách phòng đã đặt
    Route::get('/booked_room',[Fake_user::class,'booked_room'])->name('history');
});

