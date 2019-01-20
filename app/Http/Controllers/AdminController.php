<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index()
    {
    	if(Auth::user()->role_name == 'Administrator'){
    		$users = User::all();

    		return view('admin.index', compact('users'));
    	}else{
    		return redirect()->route('home');
    	}
    }
    public function create()
    {
    	if(Auth::user()->role_name == 'Administrator'){
    		return view('admin.create');
    	}else{
    		return redirect()->route('home');
    	}
    }
    public function store(Request $request)
    {
    	if(Auth::user()->role_name == 'Administrator'){
    		$this->validate($request, [
	    		'name' => 'required',
	    		'email' => 'required',
	    		'username' => 'required',
				'password' => 'min:6|required_with:confirm_password|same:confirm_password',
				'confirm_password' => 'required'
			]);
    		$user = new User;
    		$user->name = request('name');
    		$user->email = request('email');
    		$user->username = request('username');
    		$user->role_name = 'Default User';
    		$user->password = bcrypt(request('confirm_password'));
    		$user->save();

    		return redirect()->route('admin.index')->with('success_alert','New user created successfully');
    	}else{
    		return redirect()->route('home');
    	}
    }
    public function show($id)
    {
    	if(Auth::user()->role_name == 'Administrator'){
    		$user = User::find($id);
    		return view('admin.show', compact('user'));
    	}else{
    		return redirect()->route('home');
    	}
    }
    public function edit($id)
    {
    	if(Auth::user()->role_name == 'Administrator'){
    		$user = User::find($id);
   
    		return view('admin.edit', compact('user'));
    	}else{
    		return redirect()->route('home');
    	}
    }
    public function update($id, Request $request)
    {
    	if(Auth::user()->role_name == 'Administrator'){
    		if(!empty(request('password'))){
	    		$this->validate($request, [
		    		'name' => 'required',
		    		'email' => 'required',
		    		'username' => 'required',
					'password' => 'min:6|required_with:confirm_password|same:confirm_password',
					'confirm_password' => 'required'
				]);

				$user = User::find($id);
	    		$user->name = request('name');
	    		$user->email = request('email');
	    		$user->username = request('username');
	    		$user->role_name = 'Default User';
	    		$user->password = bcrypt(request('confirm_password'));
	    		$user->updated_at = now();
	    		$user->save();
    		}else{
    			$this->validate($request, [
		    		'name' => 'required',
		    		'email' => 'required',
		    		'username' => 'required'
				]);

				$user = User::find($id);
	    		$user->name = request('name');
	    		$user->email = request('email');
	    		$user->username = request('username');
	    		$user->updated_at = now();
	    		$user->save();
    		}
    		return redirect()->route('admin.index')->with('success_alert','User information updated successfully');

    	}else{
    		return redirect()->route('home');
    	}
    }
}
