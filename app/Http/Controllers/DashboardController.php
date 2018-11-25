<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;
class DashboardController extends Controller
{
    public function index()
    {
    	$vouchers = Voucher::all();
    	return view('dashboard', compact('vouchers'));
    }
}
