<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        // Kiểm tra nếu người dùng đã đăng nhập
        $user = Auth::user();
        if (!$user) {
            // Nếu không có người dùng, chuyển hướng đến trang đăng nhập
            return redirect()->route('login')->with('error', 'You must be logged in to proceed.');
        }

        // Giả sử chuỗi ID phòng được truyền qua URL hoặc từ session
        $roomIds = $request->input('room_ids'); // Ví dụ: '1,2,3'

        // Kiểm tra nếu có chuỗi ID phòng
        if ($roomIds) {
            // Chuyển chuỗi ID thành mảng
            $roomIdsArray = explode(',', $roomIds);

            // Lấy danh sách phòng theo các ID đã tách
            $rooms = Room::whereIn('id', $roomIdsArray)->get();

            // Tính tổng giá trị của các phòng
            $totalPrice = $rooms->sum(function($room) {
                return $room->price; // Hoặc tính giá sau chiết khấu nếu cần
            });
        } else {
            // Nếu không có ID phòng, lấy các phòng có trạng thái 'available' (hoặc trạng thái khác nếu cần)
            $rooms = Room::where('status', 'available')->take(2)->get();
            $totalPrice = $rooms->sum('price');
        }

        // Truyền dữ liệu vào view, bao gồm thông tin người dùng
        return view('end_user.checkout', compact('rooms', 'totalPrice', 'user'));
    }

    public function processPayment(Request $request)
    {
        // Xử lý thanh toán ở đây
        return redirect()->route('checkout')->with('success', 'Payment processed successfully!');
    }
}
