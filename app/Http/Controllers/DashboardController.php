<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
    	if(Auth::user()->role_name == 'Administrator'){
    		return redirect()->route('admin.index');
    	}else{
    		return view('dashboard');
    	}
    	// $vouchers = Voucher::all();
    	// return view('dashboard', compact('vouchers'));
    }
}
