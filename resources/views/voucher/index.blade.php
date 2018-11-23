@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-body">
			Voucher
			<a href="{{route('voucher.create')}}" class="btn btn-sm btn-success" style="float: right;">Add new item</a>
		</div>
	</div>
@endsection