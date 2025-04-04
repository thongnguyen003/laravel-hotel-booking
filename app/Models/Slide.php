<?php

// app/Models/Slide.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    // Nếu tên bảng trong CSDL không phải là dạng số nhiều của tên model, bạn có thể chỉ định tên bảng:
    protected $table = 'slide';

    // Nếu tên các trường không phải là những trường mặc định của Eloquent, bạn có thể chỉ định các trường đó:
    protected $fillable = ['room_id', 'image'];

    // Quan hệ giữa Slide và Room (một Slide thuộc về một Room)
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
