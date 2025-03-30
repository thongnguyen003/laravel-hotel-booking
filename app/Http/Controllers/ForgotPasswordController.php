<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function confirmPassword(){
        return view('userPage.confirm-forgotPassword');
    }
    public function forgotPassword(){
        return view('userPage.forgotPassword');
    }
}
