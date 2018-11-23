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
		Dashboard		
	</div>
</div>

@endsection