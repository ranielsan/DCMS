@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="text-muted">Voucher List</h4>
				</div>
				<div class="col-md-6">
					<a href="{{route('voucher.create')}}" class="btn btn-sm btn-success" style="float: right;">Add new item</a>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col">
					
					<table class="table" id="Tblvoucher">
						<thead>
						<tr>
							<th>No.</th>
							<th>Name of Payee</th>
							<th>Payment Amount</th>
							<th>Prepared By</th>
							<th>Approved By</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach($vouchers as $voucher)
						<tr>
							<td>{{$voucher->id}}</td>
							<td>{{$voucher->payee_name}}</td>
							<td>{{$voucher->payment_amount}}</td>
							<td>{{$voucher->prepared_by}}</td>
							<td>{{$voucher->approved_by}}</td>
							<td>{{$voucher->date}}</td>
							<td>
								<a href="{{ route('voucher.show', $voucher->id) }}" class="btn btn-sm btn-primary"><i class="icon-magnifier"></i></a>
								<a href="{{ route('voucher.edit', $voucher->id) }}" class="btn btn-sm btn-success"><i class="icon-pencil"></i></a>
								<a href ="{{ route('voucher.delete', $voucher->id)}}" class="btn btn-sm btn-danger" data-method="delete" id="delete"><i class="icon-trash"></i>
									
								</a>
							</td>
						</tr>
						@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
@endsection