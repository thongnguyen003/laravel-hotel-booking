<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fake_user;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
// thử lại 
Route::get('/forget-password', [ForgetPasswordManager::class, 'ForgetPassword'])
    ->name('forgetPassword');
Route::post('/forget-password', [ForgetPasswordManager::class, 'ForgetPasswordPost'])
    ->name('forgetPasswordPost');
Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])
    ->name("reset-password");
Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])
    ->name("reset-passwordPost");

// Trang chủ trang web

// Route::get('/', [Fake_user::class, 'index']);

// Trang đăng ký người dùng
Route::get('/register', [Fake_user::class, 'register'])->name('register');

// Trang đăng nhập người dùng
Route::get('/login', [Fake_user::class, 'login'])->name('log-in');

// Nhóm các route có tiền tố là là profile và cần đăng nhập mới truy cập được
Route::prefix('profile')->group(function () {
  
    // Trang hồ sơ các nhân
    Route::get('/', [Fake_user::class, 'profile'])->name('profile');

    // Trang cập nhập hồ sơ người dùng
    Route::get('/edit', [Fake_user::class, 'edit_profile'])->name('edit_profile');

    // Cập nhật hồ sơ người dùng
    Route::post('/update', [Fake_user::class, 'update_profile'])->name('update_profile');
    Route::post('/update_avatar', [Fake_user::class, 'update_avatar_profile'])->name('update_avatar_profile');

    // Trang danh sách phòng đánh dấu
    Route::get('/marked_room', [Fake_user::class, 'marked_room'])->name('mark');

    // Trang danh sách phòng đã đặt
    Route::get('/booked_room', [Fake_user::class, 'booked_room'])->name('history');
});
Route::get('/about', function () {
    return view('userPage.about');
})->name('about');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/process-payment', [CheckoutController::class, 'processPayment'])->name('process.payment');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/payment', [CheckoutController::class, 'processPayment']);
