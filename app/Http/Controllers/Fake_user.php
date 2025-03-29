<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Fake_user extends Controller
{
    public function profile(){
        // if(Session::has('user')){
        //     $user = Session::get('user');
        //     if(isset($user)){
        //         return view('end-user.profile')->with('user',$user);
        //     }
        // }
        // return redirect()->back();
        $user = User::find(1);
        return view('end_user.profile')->with('user',$user);
    }
    public function edit_profile(){
        $user = User::find(1);
        return view('end_user.edit_profile')->with('user',$user);
    }
    public function update_profile(Request $request){
        if(Session::has('user')){
            $user = Session::get('user');
            //
        }
        return redirect()->back();
    }
    public function marked_room(){
        return view('end_user.mark');
    }
    public function booked_room(){
        return view('end_user.booked');
    }
}
