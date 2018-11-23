@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<h4 class="text-muted">Create New Voucher</h4>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col">
					<table width="90%">
						<tr>
							<td style="width: 70%;">
								<div class="form-group">
									<label for="payee">Name of Payee</label>
									<input type="text" name="payee" id="payee"class="form-control">
								</div>
							</td>
							<td style="width: 30%;">
								<div class="form-group" style="float: right;">
									<label for="voucher_no">No.</label>
									<input type="text" name="voucher_no" id="voucher_no"class="form-control" style="width: 90%;">
								</div>
							</td>
						</tr>
						
					</table>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col">
					<table width="100%">
						<tr>
							<th style="width: 70%; text-align: center;">Particular</th>
							<th style="width: 20%; text-align: center;">Amount</th>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="item_name[]"></td>
							<td><input type="text" class="form-control" name="item_amount[]"></td>
							<td><input type="hidden"></td>
						</tr>
		
						<tr id ="AddItems">
							<td colspan="2" style="text-align: right;"><button class="btn btn-sm btn-success" id="btnAdd" ><i class="fa fa-plus"></i></button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection