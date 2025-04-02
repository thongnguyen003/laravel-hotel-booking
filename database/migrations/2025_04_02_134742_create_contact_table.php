<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id(); // Tạo khóa chính tự động tăng
            $table->unsignedBigInteger('user_id'); // Cột user_id
            $table->text('content'); // Cột nội dung
            $table->timestamps(); // Tạo cột created_at và updated_at

            // Nếu bạn muốn thêm khóa ngoại cho user_id
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};