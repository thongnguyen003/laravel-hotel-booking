<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('userPage.contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'message' => $request->message,
        ];

        try {
            // Gửi email đến địa chỉ của bạn
            Mail::send('emails.contact-email', ['data' => $data], function ($message) use ($data) {
                $message->to('nguyenthong0855@gmail.com') // Email nhận phản hồi
                    ->from($data['email'], $data['fullname']) // Email người gửi
                    ->subject('New Contact Form Submission');
            });

            return redirect()->back()->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Email could not be sent. Error: ' . $e->getMessage());
        }
    }
}
