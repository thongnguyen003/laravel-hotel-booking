<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\Invoice;
use App\Models\Room;
use App\Models\Type;
use App\Models\Capacity;
class FakeProductController extends Controller
{
    public function search_filter_result(Request $request){
        // đầu vào
        $type_id = $request -> type_id ?? null ;
        $capacity_id = $request -> capacity_id ?? null ;
        $sort = $request -> method_sort ?? null ; 
        $minimum_amount = $request -> minimum ?? null ;
        $maximum_amount = $request -> maximum ?? null ;
        $start_day = $request -> inception_day ?? null ;
        $end_day = $request -> expiration_day ?? null ;
        //  các điều kiện của bảng room
        $room_type_condition = [];
        if(!empty($type_id)){
            $list_type_id = explode(',',$type_id);
            $room_type_condition = $list_type_id;
        }
        $room_capacity_condition = [];
        if(!empty($capacity_id)){
            $list_capacity_id = explode(',',$capacity_id);
            $room_capacity_condition =$list_capacity_id;
        }
        // Điều kiện bảng invoices
        $invoice_condition = [];
        !empty($start_day) ? $invoice_condition_ss1[] = ["check_in" , ">=" , $start_day]: null;
        !empty($start_day) ? $invoice_condition_ss2[] = ["check_out" , ">=" , $start_day]: null;
        !empty($end_day) ? $invoice_condition_ss2[] = ["check_out",  "<=" , $end_day] : null;
        !empty($end_day) ? $invoice_condition_ss1[] = ["check_in",  "<=" , $end_day] : null;
        // lấy dữ liệu từ model
        $bookings = Booking::query();
        if (!empty($invoice_condition_ss1) && !empty($invoice_condition_ss2)) {
            $bookings->whereHas('invoice', function ($query) use ($invoice_condition_ss1,$invoice_condition_ss2) {  
                $current_day = now()->format('Y/m/d');
                $query->where('check_in','>=',$current_day);
                $query->where(function($que) use ($invoice_condition_ss1) {
                    foreach ($invoice_condition_ss1 as $condition) {
                        $que->where($condition[0], $condition[1], $condition[2]);
                    }
                });
                $query->orwhere(function($que) use ($invoice_condition_ss2) {
                    foreach ($invoice_condition_ss2 as $condition) {
                        $que->where($condition[0], $condition[1], $condition[2]);
                    }
                });
                
            });
        }
        $room_id = $bookings->pluck('room_id')->toArray();
        $rooms = Room::whereNotIn('id', $room_id);
        if(!empty($room_type_condition)){
            $rooms = $rooms->whereIn('type_id' , $room_type_condition);
        }
        if(!empty($room_capacity_condition)){
            $rooms = $rooms->whereIn('capacity_id' ,  $room_capacity_condition);
        }
        if(!empty($minimum_amount)){
            $rooms = $rooms->whereRaw("(price - price * COALESCE(discount, 0)) >= ?", [$minimum_amount]);
        }
        if(!empty($maximum_amount)){
            $rooms = $rooms->whereRaw("(price - price * COALESCE(discount, 0)) >= ?", [$maximum_amount]);
        }
        if(!empty($sort)){
            $room->orderBy('price',$sort);
        }
        return $rooms->get();
    }
    public function display_search_result_result(Request $request){
        $rooms = $this->search_filter_result( $request);
        $types = Type::all();
        $capacities = Capacity::all();
        return view('end_user.search_resourch',compact('rooms','types','capacities'));
    }
    public function dis(){
        return view('end_user.fake_new_search');
    }
}
