@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="text-muted">Check Voucher</h4>
				</div>
				
			</div>
			<hr />
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col">
							<table width="100%">
								<tr>
									<td width="60%" style="font-size: 20px;"><b>NAME OF PAYEE:</b> {{$voucher->payee_name}}</td>
									<td width="30%" style="font-size: 20px;"><b>NO.</b>: {{$voucher->id}}</td>
								</tr>
							</table>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col">
							<table width="100%" cellpadding="10">
								<tr>
									<td width="70%" style="font-size: 20px;border-bottom: 1px solid black;border-top: 1px solid black;" align="center">PARTICULARS</td>
									<td width="30%" style="font-size: 20px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;" align="center">AMOUNT</td>
								</tr>
								@foreach($voucher->particulars as $particular)
								<tr>
									<td style="padding-left: 20px;font-size: 20px;">{{$particular->name}}</td>
									<td style="padding-left: 20px;font-size: 20px;border-left: 1px solid black;">P {{$particular->amount}}</td>
								</tr>
								@endforeach
								
								<!-- Border-bottom -->
								<tr>
									<td style="padding-left: 20px;font-size: 20px;border-bottom: 1px solid black;"><label class="invisible">No item</label></td>
									<td style="padding-left: 20px;font-size: 20px;border-left: 1px solid black;border-bottom: 1px solid black;" ></td>
								</tr>
								
							</table>
						</div>
					</div>
					<br/>
					<div class="row" >
						<div class="col-md-6">
							<table width="100%" border="1" cellpadding="10">
								<tr>
									<td style="font-size: 15px;" width="50%"><b>BANK:</b> {{$voucher->bank_name}}</td>
									<td style="font-size: 15px;" width="50%"><b>CHECK NO:</b> {{$voucher->check_no}}</td>
								</tr>
								<tr>
									<td style="font-size: 15px;" width="50%"><b>DATE:</b> {{ date('F d, Y', strtotime($voucher->date)) }}</td>
									<td style="font-size: 15px;" width="50%"><b>C.V. NO:</b> {{$voucher->cv_no}}</td>
								</tr>
								<tr>
									<td style="font-size: 15px;" width="50%"><b>PREPARED BY:</b> {{$voucher->prepared_by}}</td>
									<td style="font-size: 15px;" width="50%"><b>APPROVED BY:</b> {{$voucher->approved_by}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table width="100%">
								<tr>
									<td style="font-size: 15px;border-top: 1px solid black;" width="240px">RECEIVED THE AMOUNT OF PESOS</td>
									<td style="font-size: 15px;border-top: 1px solid black;border-bottom: 1px solid black;" align="center"><div id="convertToString"> {{$voucher->payment_amount}}</div></td>
								</tr>
								<tr>
									<td style="font-size: 15px;border-bottom: 1px solid black;" width="240px">(P {{$voucher->payment_amount}} )</td>
									<td style="font-size: 15px;" >IN FULL PAYMENT OF THE AMOUNT ABOVE</td>
								</tr>
							</table>
							<br/>
							<br />
							<table style="float: right;">
								<tr>
									<td style="font-size: 15px;border-top: 1px solid black;" width="240px" align="center">PAYEE</td>
									
								</tr>
							</table>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<div class="col-md-6">
					<a href="{{route('voucher.index')}}" class="btn btn-sm btn-danger">Back</a>
				</div>
				<div class="col-md-6">
					<a href="{{route('voucher.print', $voucher->id)}}" class="btn btn-sm btn-success" style="float: right;" target="__blank">Print</a>
				</div>
			</div>
		</div>
	</div>
@endsection