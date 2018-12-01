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
							<th width="300">Particulars</th>
							<th>Payment Amount</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach($particulars as $particular)
						<tr>
							<td>{{$particular->voucher->id}}</td>
							<td>{{$particular->voucher->payee_name}}</td>
							<td>{{$particular->name}}</td>
							<td>Php {{$particular->voucher->payment_amount}}</td>
							<td>{{ date('F d, Y', strtotime($particular->voucher->date)) }}</td>
							<td>
								<a href="{{ route('voucher.show', $particular->voucher->id) }}" class="btn btn-sm btn-primary"><i class="icon-magnifier"></i></a>
								<a href="{{ route('voucher.edit', $particular->voucher->id) }}" class="btn btn-sm btn-success"><i class="icon-pencil"></i></a>
								<a href ="{{ route('voucher.delete', $particular->voucher->id)}}" class="btn btn-sm btn-danger" data-method="delete" id="delete"><i class="icon-trash"></i>
									
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