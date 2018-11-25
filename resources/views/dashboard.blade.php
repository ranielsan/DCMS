@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-primary">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="btn-group float-right">
					<button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-settings"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
				<div class="text-value">9.823</div>
				<div>Members online</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-info">
			<div class="card-body pb-0" style="height: 140px;">
				<button class="btn btn-transparent p-0 float-right" type="button">
					<i class="icon-location-pin"></i>
				</button>
				<div class="text-value">9.823</div>
				<div>Members online</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-warning" >
			<div class="card-body pb-0" style="height: 140px;">
				<div class="btn-group float-right">
					<button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-settings"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
				<div class="text-value">9.823</div>
				<div>Members online</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-danger">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="btn-group float-right">
					<button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-settings"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
				<div class="text-value">9.823</div>
				<div>Members online</div>
			</div>

		</div>
	</div>
</div>
<!-- Content -->
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