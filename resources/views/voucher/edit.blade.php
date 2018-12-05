@extends('layouts.app')
@section('content')
@if($errors->count())
	<div class="alert alert-danger">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	        </button>
	    <ul>
	        @foreach($errors->all() as $error)
	        <li>{{$error}}</li>
	        @endforeach
	    </ul>
	</div>
@endif
<form method="post" action="{{ route('voucher.update', $voucher->id) }}">
	{{ csrf_field() }}
	<div class="card">
		<div class="card-header">
			<h4 class="text-muted">Update Voucher</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="payee"><b>Name of Payee*</b></label>
						<input type="text" name="name_payee" id="payee"class="form-control" placeholder="Name of Payee" required="" value="{{$voucher->payee_name}}">
					</div>		
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="payee"><b>No.*</b></label>
						<input type="text" name="voucher_id" id="payee"class="form-control numInput" placeholder="Voucher ID" required="" value="{{$voucher->voucher_id}}">
					</div>		
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col">
					<table width="100%">
						<tr>
							<th style="width: 75%; text-align: center;">Particular*</th>
							<th style="width: 25%; text-align: center;">Amount*</th>
						</tr>
						@if($voucher->particulars)
							@foreach($voucher->particulars as $particular)
								<tr>
									<td><input type="text" class="form-control" name="item_name[]" required="" value="{{$particular->name}}"></td>
									<td><input type="text" class="form-control numInput" name="item_amount[]" value="{{$particular->amount}}"></td>
									<td><button class='btn btn-sm btn-danger btnDelete' id='btnDelete' type='button'><i class='fa fa-minus'></></button></td>
								</tr>
							@endforeach
						@else
							<tr>
								<td><input type="text" class="form-control" name="item_name[]" required=""></td>
								<td><input type="text" class="form-control" name="item_amount[]" required=""></td>
								<td><input type="hidden"></td>
							</tr>
						@endif
						<tr id ="AddItems">
							<td colspan="2" style="text-align: right;"><button type="button" class="btn btn-sm btn-success" id="btnAdd" ><i class="fa fa-plus"></i></button></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="bank"><b>Bank</b></label>
						<input type="text" name="bank" id="bank"class="form-control" placeholder="Bank name" value="{{$voucher->bank_name}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="check_no"><b>Check No.</b></label>
						<input type="text" name="check_no" id="check_no"class="form-control" placeholder="Check No." value="{{$voucher->check_no}}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="payment_amount"><b>Payment Amount*</b></label>
						<input type="text" name="payment_amount" id="payment_amount"class="form-control numInput" placeholder="Payment Amount" required="" value="{{$voucher->payment_amount}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="date"><b>Date*</b></label>
						<div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                            <input type="date" class="form-control" name="date" id="date" required="" value="{{$voucher->date}}">
                        </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="cv_no"><b>C.V. No.</b></label>
						<input type="text" name="cv_no" id="cv_no"class="form-control" placeholder="C.V. No." value="{{$voucher->cv_no}}">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="prepared_by"><b>Prepared By</b></label>
						<input type="text" name="prepared_by" id="prepared_by"class="form-control" placeholder="Prepared By" value="{{$voucher->prepared_by}}">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="approved_by"><b>Approved By</b></label>
						<input type="text" name="approved_by" id="approved_by"class="form-control" placeholder="Approved By" value="{{$voucher->approved_by}}">
					</div>
				</div>
			</div>
		</div>
		<div class="alert alert-error">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		<div class="card-footer">
			<a href="{{ route('voucher.index') }}"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a>
			<button class="btn btn-sm btn-success" style="float: right;" type="submit">Save</button>
		</div>
	</div>
</form>
@endsection