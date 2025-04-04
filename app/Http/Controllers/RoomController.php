<?php

namespace App\Http\Controllers;

use App\Models\Room; // Đảm bảo bạn đã tạo model Room
use Illuminate\Http\Request;
use App\Models\Slide; // Đảm bảo bạn đã tạo model Room
use App\Models\Marking;
use App\Models\Comment;


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
        return view('room.detail', compact('room', 'reviews', 'relatedRooms', 'slides'));
    }
    
    public function addComment(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string|max:1000',
        ]);

        Reviews::create([
            'room_id' => $id,
            'user_id' => $request->user_id,
            'content' => $request->content,
        ]);

        return redirect()->route('rooms.detail', $id)->with('success', 'Comment added successfully.');
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
    public function mark(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);
    
        // Kiểm tra xem bản ghi đã tồn tại trong bảng marking hay chưa
        $existingMark = Marking::where('room_id', $id)
                                ->where('user_id', $request->user_id)
                                ->first();
    
        if ($existingMark) {
            // Nếu đã tồn tại, xóa bản ghi
            $existingMark->delete();
            $message = 'Room unmarked successfully.';
        } else {
            // Nếu chưa tồn tại, thêm mới bản ghi
            Marking::create([
                'room_id' => $id,
                'user_id' => $request->user_id,
            ]);
            $message = 'Room marked successfully.';
        }
    
        return redirect()->route('rooms.detail', $id)->with('success', $message);
    }
    // Xóa sản phẩm
    public function destroy($id)
    {
        $Room = Room::findOrFail($id);
        $Room->delete();

        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
    }
}
