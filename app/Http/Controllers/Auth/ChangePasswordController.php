<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
class ChangePasswordController extends Controller
{
    public function index()
    {

    	return view('users.changepassword');
    }
    public function changePassword(Request $request)
    {
    	$user = Auth::user();
    	$this->validate($request, [
    		'old_password' => 'required',
			'new_password' => 'min:6|required_with:confirm_password|same:confirm_password',
			'confirm_password' => 'required'
		]);
    	$user = Auth::user();

		if(Hash::check($request->old_password, $user->password)) {
        	$updateUser = User::find($user->id);
        	$updateUser->password = bcrypt($request->new_password);
        	$updateUser->save();
        	return back()->with('success_alert','Password changed successfully');
    	} else {
        	return back()->with('alert','Old password and current password does not match');
    	}
    }
}
