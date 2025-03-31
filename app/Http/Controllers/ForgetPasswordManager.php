<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ForgetPasswordManager extends Controller
{
    public function ForgetPassword()
    {
        return view('userPage.forget-password');
    }

    public function ForgetPasswordPost(Request $request)
    {
        // dd($request->all()); // Xem dữ liệu gửi lên
        // $request->validate([
        //     'email' => "required|email|exists:users,email",
        // ]);
        $request->validate([
            'email' => "required|email",
        ]);

        $token = Str::random(64);
        DB::table("password_resets")->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send("emails.forget-password", ['token' => $token], function($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route("forgetPassword"))
        ->with("success", "We have sent an email to reset your password.");
    }

    public function resetPassword($token)
    {
        return view('userPage.new-password', compact('token'));
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:users,email",
            "password" => "required|string|min:6|confirmed",
            "password_confrimation" => "required"
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                "email" => $request->email,
                "token" => $request->token
            ])->first();

        if (!$updatePassword) {
            return redirect()->to(route("reset-password"))
                ->with("error", "Invalid token or email.");
        }

        User::where("email", $request->email)
            ->update(["password" => Hash::make($request->password)]);

        // Xóa token sau khi đã sử dụng
        DB::table("password_resets")
            ->where("email", $request->email)
            ->delete();

        return redirect()->to(route("login"))
        ->with("success", "Password reset successful.");
    }
}