<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
class Room extends Model
{
    use HasFactory;

    // Các thuộc tính mass assignable
    protected $fillable = [
        'name',
        'price',
        'description',
    ];
    // Trong model Room.php
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // Nếu có quan hệ với các model khác, bạn có thể định nghĩa ở đây
    // Ví dụ:
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}