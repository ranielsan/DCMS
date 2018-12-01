@extends('layouts.app')
@section('content')
<form method="post" action="{{ route('voucher.store') }}">
	{{ csrf_field() }}
	<div class="card">
		<div class="card-header">
			<h4 class="text-muted">Create New Voucher</h4>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="payee"><b>Name of Payee*</b></label>
						<input type="text" name="name_payee" id="payee"class="form-control" placeholder="Name of Payee" required="">
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
						<tr>
							<td><input type="text" class="form-control" name="item_name[]" required=""></td>
							<td><input type="text" class="form-control numInput" name="item_amount[]" required=""></td>
							<td><input type="hidden"></td>
						</tr>
		
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
						<input type="text" name="bank" id="bank"class="form-control" value="Banco de Oro" placeholder="Bank name">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="check_no"><b>Check No.</b></label>
						<input type="text" name="check_no" id="check_no"class="form-control" placeholder="Check No.">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="payment_amount"><b>Payment Amount*</b></label>
						<input type="text" name="payment_amount" id="payment_amount"class="form-control numInput" placeholder="Payment Amount" required="">
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
                            <input type="date" class="form-control" name="date" id="date" required="" value="{{ now()->toDateString() }}">
                        </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="cv_no"><b>C.V. No.</b></label>
						<input type="text" name="cv_no" id="cv_no"class="form-control" placeholder="C.V. No.">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="prepared_by"><b>Prepared By</b></label>
						<input type="text" name="prepared_by" id="prepared_by"class="form-control" placeholder="Prepared By">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="approved_by"><b>Approved By</b></label>
						<input type="text" name="approved_by" id="approved_by" value="Atty. Fidel J. Exconde Jr." class="form-control" placeholder="Approved By">
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<a href="{{ URL::previous() }}"><button class="btn btn-sm btn-danger" type="button">Cancel</button></a>
			<button class="btn btn-sm btn-success" style="float: right;" type="submit">Save</button>
		</div>
	</div>
</form>
@endsection