<?php

namespace App\Http\Controllers;
use App\Models\Voucher;
use App\Models\VoucherParticular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    public function index()
    {
    	$vouchers = Voucher::all();
    	return view('voucher.index', compact('vouchers'));
    }

    public function create()
    {
    	return view('voucher.create');
    }

    public function store(Request $request)
    {
    	$voucher = new Voucher;
    	$voucher->payee_name = request('name_payee');
    	$voucher->bank_name = request('bank');
    	$voucher->check_no = request('check_no');
    	$voucher->payment_amount = request('payment_amount');
    	$voucher->date = request('date');
    	$voucher->cv_no = request('cv_no');
    	$voucher->prepared_by = request('prepared_by');
    	$voucher->approved_by = request('approved_by');
    	$voucher->created_by = Auth::user()->name;
    	$voucher->updated_by = Auth::user()->name;
    	$voucher->save();

    	$particulars = request('item_name');
    	$amount = request('item_amount');
    	if($particulars){
    		foreach ($particulars as $key => $value) {
    			$particular = new VoucherParticular;
    			$particular->voucher_id = $voucher->id;
    			$particular->name = $particulars[$key];
    			$particular->amount = $amount[$key];
    			$particular->save();
    		}
    	}
    	return redirect()->route('voucher.index');
    }

    public function edit($id)
    {
    	$voucher = Voucher::findorfail($id);
    	return view('voucher.edit', compact('voucher'));
    }

     public function update(Request $request, $id)
    {
    	$voucher = Voucher::findorfail($id);
    	$voucher->payee_name = request('name_payee');
    	$voucher->bank_name = request('bank');
    	$voucher->check_no = request('check_no');
    	$voucher->payment_amount = request('payment_amount');
    	$voucher->date = request('date');
    	$voucher->cv_no = request('cv_no');
    	$voucher->prepared_by = request('prepared_by');
    	$voucher->approved_by = request('approved_by');
    	$voucher->created_by = Auth::user()->name;
    	$voucher->updated_by = Auth::user()->name;
    	$voucher->save();

    	$particularsdelete = VoucherParticular::where('voucher_id','=',$id)->delete();
    	$particulars = request('item_name');
    	$amount = request('item_amount');
    	if($particulars){
    		foreach ($particulars as $key => $value) {
    			$particular = new VoucherParticular;
    			$particular->voucher_id = $voucher->id;
    			$particular->name = $particulars[$key];
    			$particular->amount = $amount[$key];
    			$particular->save();
    		}
    	}
    	return redirect()->route('voucher.index');
    }

    public function destroy($id)
    {
    	$voucher = Voucher::findorfail($id);
    	$voucher->delete();

    	$particulars = VoucherParticular::where('voucher_id','=',$id)->delete();
    	return redirect()->route('voucher.index');
    }

    public function show($id)
    {
    	$voucher = Voucher::findorfail($id);
    	return view('voucher.show', compact('voucher'));
    }

    public function print($id)
    {
    	$voucher = Voucher::findorfail($id);
    	return view('voucher.print', compact('voucher'));
    }
}
