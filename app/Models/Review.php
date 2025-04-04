<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
        'rating',
        'comment',
    ];

    // Mối quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mối quan hệ với model Room (nếu cần)
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}