<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    use HasFactory;

    protected $table = 'payment_gateways'; // Đảm bảo model trỏ đúng tên bảng
    protected $fillable = ['name', 'description']; // Cho phép thêm dữ liệu vào cột này
}
