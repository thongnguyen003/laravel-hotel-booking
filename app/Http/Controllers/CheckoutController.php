<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\PaymentGateway;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to proceed.');
        }

        $payment_gateways = PaymentGateway::all();

        // Định nghĩa chuỗi roomIds trực tiếp trong controller (ví dụ "1,2,3")
        $roomIds = "1,2,3"; // Bạn có thể thay đổi chuỗi này theo nhu cầu

        $rooms = collect();
        $totalPrice = 0;

        if ($roomIds) {
            // Sử dụng FIND_IN_SET để lấy các phòng có ID trong chuỗi roomIds
            $rooms = Room::whereRaw("FIND_IN_SET(id, ?)", [$roomIds])->get();
            // Tính tổng giá tiền của các phòng đã chọn
            $totalPrice = $rooms->sum('price');
        } 

        // Gán mặc định ngày check-in và check-out
        $checkinDate = '22/03/2025';
        $checkoutDate = '25/03/2025';

        // Tính số đêm
        $nights = Carbon::createFromFormat('d/m/Y', $checkoutDate)
            ->diffInDays(Carbon::createFromFormat('d/m/Y', $checkinDate));

        return view('end_user.checkout', compact(
            'rooms', 'totalPrice', 'user', 'payment_gateways',
            'roomIds', 'checkinDate', 'checkoutDate', 'nights'
        ));
    }

    public function processPayment(Request $request)
    {
        // Xử lý thanh toán ở đây
        return redirect()->route('checkout')->with('success', 'Payment processed successfully!');
    }
}
