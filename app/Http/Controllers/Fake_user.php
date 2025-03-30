<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\edit_profile;
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
    public function update_profile(edit_profile $request){
        $user = User::find(1);
        $date = $request->year ."-". $request->month . "-". $request->day;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->day_of_birth = $date;
        $user->save();
        return redirect()->route('profile');
    }
    public function update_avatar_profile(request $request){
        $user = User::find(1);
        $imageName = $user->avatar;
        if($request->hasFile('avatar')){
            $destinationPath = storage_path('app/public/avatars');
            $oldName = "err.png";
            if(!empty($imageName)){
                $oldName = $imageName;
            }
            
            $oldFile = $destinationPath."/".$oldName;
            if(file_exists($oldFile)){
                unlink($oldFile);
            }
            $image = $request->file('avatar');
            $imageName = time().$image->getClientOriginalName();
            $path = $image->storeAs('avatars', $imageName, 'public');
        }
        $user->avatar = $imageName;
        $user->save();
        echo($imageName);
        return redirect()->route('profile');
    }
    public function marked_room(){
        return view('end_user.mark');
    }
    public function booked_room(){
        return view('end_user.booked');
    }
}
