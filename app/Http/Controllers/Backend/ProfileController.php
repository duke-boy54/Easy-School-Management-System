<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Usercontroller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function ProfileView()
     {
        $id = Auth::user()->id;
        $user = User::find($id);
         return view('admin.profile.view',compact('user'));
     }

     public function ProfileEdit()
     {
         $id = Auth::user()->id;
         $editdata = User::find($id);
         return view('admin.profile.edit',compact('editdata'));
     }

     public function ProfileStore(Request $request)
     {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;

        if($request->file('image'))
        {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image'] = $filename;

        }
        $data->save();
        return redirect()->route('profile.view',compact('data'));
     }

     public function ChangePassword()
     {
         $editdata = User::all();
        return view('admin.profile.change_passwd',compact('editdata'));
     }

     public function UpdatePassword(Request $request)
     {

        $validatedData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
          ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password,$hashedPassword))
        {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');

        }
        else
        {
            return redirect()->back();
        }
     }

}
