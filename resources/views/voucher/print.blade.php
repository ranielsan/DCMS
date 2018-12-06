@extends('layouts.print')
@section('content')

	<div class="row">
		<div class="col-md-12">
			<center><p style="font-size: 16px;"><b>CHECK VOUCHER</b></p></center>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table width="100%">
				<tr>
					<td width="60%" style="font-size: 12px;"><b>NAME OF PAYEE:</b> {{$voucher->payee_name}}</td>
					<td width="30%" style="font-size: 12px;"><b>NO.</b>: {{$voucher->voucher_id}}</td>
				</tr>
			</table>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-12">
			<table width="100%" cellpadding="5">
				<tr>
					<td width="70%" style="font-size: 12px;border-bottom: 1px solid black;border-top: 1px solid black;" align="center">PARTICULARS</td>
					<td width="30%" style="font-size: 12px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;" align="center">AMOUNT</td>
				</tr>
				@foreach($voucher->particulars as $particular)
				<tr>
					<td style="padding-left: 20px;font-size: 12px;">{{$particular->name}}</td>
					<td style="padding-left: 20px;font-size: 12px;border-left: 1px solid black;">
						@if(!empty($particular->amount))
							P {{ number_format($particular->amount, 2)}}
						@endif
					</td>
				</tr>
				@endforeach
				<tr>
					<td style="padding-left: 20px;font-size: 12px;" class="invisible">No item</td>
					<td style="padding-left: 20px;font-size: 12px;border-left: 1px solid black;" ></td>
				</tr>
				<tr>
					<td style="padding-left: 20px;font-size: 12px;" class="invisible">No item</td>
					<td style="padding-left: 20px;font-size: 12px;border-left: 1px solid black;" ></td>
				</tr>
				<tr>
					<td style="padding-left: 20px;font-size: 12px;" class="invisible">No item</td>
					<td style="padding-left: 20px;font-size: 12px;border-left: 1px solid black;" ></td>
				</tr>
				<tr>
					<td style="padding-left: 20px;font-size: 12px;" class="invisible">No item</td>
					<td style="padding-left: 20px;font-size: 12px;border-left: 1px solid black;" ></td>
				</tr>
				<tr>
					<td style="padding-left: 20px;font-size: 12px;" class="invisible">No item</td>
					<td style="padding-left: 20px;font-size: 12px;border-left: 1px solid black;" ></td>
				</tr>
				
				<!-- Border-bottom -->
				<tr>
					<td style="padding-left: 20px;font-size: 12px;border-bottom: 1px solid black;"><label class="invisible">No item</label></td>
					<td style="padding-left: 20px;font-size: 12px;border-left: 1px solid black;border-bottom: 1px solid black;" ></td>
				</tr>
				
			</table>
		</div>
	</div>
	
	<div class="row">
		<div class="col">
			<label style="float: right; font-size: 12px; margin-right: 20%;">Total: P {{number_format($sum, 2)}}</label>
		</div>
	</div>
	
	<div class="row" >
		<div class="col" style="width: 50%;">
			<table width="100%" cellpadding="5">
				<tr>
					<td style="font-size: 12px;border: 1px solid black;" width="25%"><b>BANK:</b> <br>{{$voucher->bank_name}}</td>
					<td style="font-size: 12px;border: 1px solid black;" width="25%"><b>CHECK NO:</b> <br>
						@if(!empty($voucher->check_no))
							{{$voucher->check_no}}
						@else
							<div class="invisible">No Data</div>
						@endif
					</td>
					<td rowspan="2" style="font-size: 12px;border-top: 1px solid black; width: 50%;">
						RECEIVED THE AMOUNT OF PESOS 
						<div id="convertToString" style="border-bottom: 1px solid black;display: inline;font-size: 12px;">{{$voucher->payment_amount}}</div> 
						<div style="border-bottom: 1px solid black;display: inline;font-size: 12px;">
						(P {{number_format($voucher->payment_amount, 2)}} )
						</div> &nbsp;  &nbsp; 
						 IN FULL PAYMENT OF THE AMOUNT ABOVE.

					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;border: 1px solid black;" width="25%"><b>DATE:</b> <br>{{ date('F d, Y', strtotime($voucher->date)) }}</td>
					<td style="font-size: 12px;border: 1px solid black;" width="25%"><b>C.V. NO:</b> <br>
						@if(!empty($voucher->cv_no))
							{{$voucher->cv_no}}
						@else
							<div class="invisible">No Data</div>
						@endif
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px;border: 1px solid black;" width="25%"><b>PREPARED BY:</b> 
						<br>
						@if(!empty($voucher->prepared_by))
							{{$voucher->prepared_by}}
						@else
							<div class="invisible">No Data</div>
						@endif
					</td>
					<td style="font-size: 12px;border: 1px solid black;" width="25%"><b>APPROVED BY:</b> <br>{{$voucher->approved_by}}</td>
					<td style="font-size: 12px;">
						<table style="float: right;">
								<tr>
									<td style="font-size: 12px;border-top: 1px solid black;" width="240px" align="center">PAYEE</td>
									
								</tr>
							</table>
					</td>
				</tr>
				<tr>
					
				</tr>
			</table>
		</div>
		<!-- <div class="col" style="width: 50%;">
			<table width="100%">
				<tr>
					<td style="font-size: 12px;border-top: 1px solid black;">RECEIVED THE AMOUNT OF PESOS</td>
					<td style="font-size: 12px;border-top: 1px solid black;border-bottom: 1px solid black;" align="center"><div id="convertToString"> {{$voucher->payment_amount}}</div></td>
				</tr>
				<tr>
					<td style="font-size: 12px;border-bottom: 1px solid black;">(P {{$voucher->payment_amount}} )</td>
					<td style="font-size: 12px;" >IN FULL PAYMENT OF THE AMOUNT ABOVE</td>
				</tr>
			</table>
			<br/>
			<br />
			<table style="float: right;">
				<tr>
					<td style="font-size: 12px;border-top: 1px solid black;" align="center">PAYEE</td>
					
				</tr>
			</table> -->
		<!-- </div> -->	 				
	</div>
				

@endsection