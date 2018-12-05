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
        $particulars = VoucherParticular::all();
    	$vouchers = Voucher::all();
    	return view('voucher.index', compact('vouchers', 'particulars'));
    }

    public function create()
    {
    	return view('voucher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'voucher_id' => 'unique:vouchers',
            
        ]);
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
        $voucher->voucher_id = request('voucher_id');
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
    	return redirect()->route('voucher.show', $voucher->id);
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
        $voucher->voucher_id = request('voucher_id');
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
    	return redirect()->route('voucher.show', $voucher->id);
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
    	$sum = $voucher->particulars->sum('amount');
    	return view('voucher.show', compact('voucher', 'sum'));
    }

    public function print($id)
    {
    	$voucher = Voucher::findorfail($id);
    	$sum = $voucher->particulars->sum('amount');
    	return view('voucher.print', compact('voucher', 'sum'));
    }
}
