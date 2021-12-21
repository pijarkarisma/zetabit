<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Image;

class UserController extends Controller
{
    public function profile(){
    	return view('layouts.profile', array('user' => Auth::user()) );
    }

    public function update_profile(Request $request){
        $user = Auth::user();

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
            // Delete file if user change avatar
            if ($user->avatar != 'default-avatar.jpg'){
                File::delete(public_path('frontend/image/upload/avatar/'.$user->avatar));
            }

    		$avatar = \request('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/frontend/image/upload/avatar/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    	}

        $user->name = \request('name');
        $user->address = \request('address');
        $user->save();
    	return view('layouts.profile', array('user' => Auth::user()) );
    }

    public function delete_avatar(Request $request){
        $user = Auth::user();

        File::delete(public_path('frontend/image/upload/avatar/'.$user->avatar));
        $user->avatar = 'default-avatar.jpg';
        $user->save();
        return view('layouts.profile', array('user' => Auth::user()) );
    }

    public function form()
    {
        $user = new User();
        $user = User::get(['users.id','users.name','users.email','users.password', 'users.phonenumber','users.address','users.level']);;
        return view('superadmin.addUserForm', compact('user'));
    }

    public function user()
    {
        $user = new User();
        $user = User::get(['users.id','users.name','users.email','users.password', 'users.phonenumber','users.address','users.level']);;
        return view('superadmin.showUsers', compact('user'));
    }

    public function add()
    {
        $user = new User();

        //model->columnName = request('field_name');
        $user->id = \request('id');
        $user->id = \request('name');
        $user->id = \request('email');
        $user->id = \request('phoneNumber');
        $user->id = \request('address');
        $user->id = \request('password');
        $user->id = \request('level');

        $user->save();//Insert into table stocking(id, stockDate, productId, supplierId, userId, quantity, price) value(?,?,?,?,?,?,?);
        return redirect()->route('userform')->with('success','User added successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','User Deleted Successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('superadmin.editUserForm', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->address = $request->input('address');
        $user->level = $request->input('level');

        $user->update();

        return redirect()->back()->with('success','User updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
