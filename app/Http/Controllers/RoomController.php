<?php

namespace App\Http\Controllers;

use App\Models\Room; // Đảm bảo bạn đã tạo model Room
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    // Hiển thị form tạo mới sản phẩm
    public function create()
    {
        return view('rooms.create');
    }

    // Lưu sản phẩm mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        Room::create($request->all());

        return redirect()->route('rooms.index')->with('success', 'Room created successfully.');
    }

    public function show($id)
    {
        // Lấy thông tin phòng theo ID
        $room = Room::findOrFail($id);
    
        // Lấy thông tin từ bảng reviews liên quan đến phòng này
        // Bao gồm avatar từ bảng users
        $reviews = $room->reviews()->with('user:id,avatar')->get();
    
        // Lấy tất cả các phòng có cùng type_id
        $relatedRooms = Room::where('type_id', $room->type_id)
                            ->where('id', '!=', $id)
                            ->get();
    
        // Lấy ảnh phòng từ bảng slide theo room_id
        $slides = Slide::where('room_id', $id)->get();
    
        // Trả về dữ liệu cho view
        return view('room.show', compact('room', 'reviews', 'relatedRooms', 'slides'));
    }
    

    // Hiển thị form chỉnh sửa sản phẩm
    public function edit($id)
    {
        $Room = Room::findOrFail($id);
        return view('rooms.edit', compact('Room'));
    }

    // Cập nhật sản phẩm
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $Room = Room::findOrFail($id);
        $Room->update($request->all());

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully.');
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $Room = Room::findOrFail($id);
        $Room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
