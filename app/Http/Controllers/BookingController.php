<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Room;
use App\Models\PaymentGateway;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function show(Request $request)
    {
        // Lấy tất cả dữ liệu từ form
        $customerInfo = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $roomInfo = [
            'rooms' => $request->rooms,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'total_price' => $request->total_price,
        ];

        $paymentInfo = [
            'payment_method' => $request->payment,
            'payment_gateway' => $request->payment_gateway,
        ];

        // Lưu thông tin vào bảng invoices (bao gồm ID mã hóa đơn giản)
        $user = Auth::user();
        $invoiceId = $this->generateInvoiceId($user->name); // Tạo ID cho invoice

        // Lưu thông tin vào bảng invoices
        $invoice = Invoice::create([
            'id' => $invoiceId,
            'user_id' => $user->id,
            'check_in' => Carbon::createFromFormat('d/m/Y', $request->checkin_date)->format('Y-m-d'),
            'check_out' => Carbon::createFromFormat('d/m/Y', $request->checkout_date)->format('Y-m-d'),
            'total_amount' => $request->total_price,
            'gateway_id' => $request->payment_gateway,
            'payment_status' => $this->getPaymentStatus($request->payment), // Lấy status thanh toán
        ]);

        // Lưu các phòng vào bảng bookings
        foreach ($request->rooms as $roomId) {
            DB::table('bookings')->insert([
                'invoice_id' => $invoiceId,
                'room_id' => $roomId,
                'cost' => $request->total_price / count($request->rooms), // Chia tổng giá cho các phòng
            ]);
        }

        // Truyền thông tin tới view
        return view('booking.show', compact('customerInfo', 'roomInfo', 'paymentInfo'));
    }

    // Hàm tạo ID cho invoice từ tên người dùng và thời gian hiện tại
    public function generateInvoiceId($userName)
    {
        // Lấy thời gian hiện tại
        $dateTime = Carbon::now()->format('YmdHis'); // Ví dụ: 20250322083045

        // Kết hợp tên người dùng và thời gian để tạo ID đơn giản
        return strtoupper(substr(md5($userName), 0, 6) . $dateTime); // MD5 + thời gian
    }

    // Hàm lấy payment status dựa trên phương thức thanh toán
    public function getPaymentStatus($paymentMethod)
    {
        if ($paymentMethod === 'Pay later') {
            return 'not paid';
        } elseif ($paymentMethod === '2-3') {
            return 'paid a part';
        } else {
            return 'paid';
        }
    }
}
