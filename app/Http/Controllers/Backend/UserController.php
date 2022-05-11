<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserView()
    {
    $alldata = User::all();
    return view('admin.backend.user_view',compact('alldata'));

    //or another way of viewing data from database tables
    // $data['alldata'] = User::all();
    // $data['tesing']= Category::all();
    // return view('admin.backend.user_view',$data);
    }

    public function UserAdd()
    {
        return view('admin.backend.user_add');
    }

    public function StoreUser(Request $request)
    {
        $validatedData = $request->validate([
          'email' => 'required|unique:users',
          'name' => 'required|unique:users',
        ]);

        $users = new User;
        $users->usertype = $request->usertype;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();


        $notification = array(
            'message' => 'User Inserted Succefully',
            'alert-type' => 'success',
        );

        return redirect()->route('user.view')->with('success','User Added succesful');
    }

    public function EditUser($id)
    {
      $datas = User::find($id);
      return view('admin.backend.user_edit',compact('datas'));
    }

    public function UpdateUser(Request $request,$id)
    {
     $datas = User::find($id);
     $datas->usertype = $request->usertype;
     $datas->name = $request->name;
     $datas->email = $request->email;
     $datas->save();
     return redirect()->route('user.view')->with('success','User Updated Succesfully');
    }

    public function DeleteUser($id)
    {
        $datas = User::find($id);
        $datas->delete();
        return redirect()->route('user.view');
    }
}
