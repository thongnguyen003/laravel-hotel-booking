<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marking extends Model
{
    use HasFactory;

    protected $table = 'marking'; // Tên bảng

    protected $fillable = [
        'room_id',
        'user_id',
    ];

    // Định nghĩa mối quan hệ với model Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    // Định nghĩa mối quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}