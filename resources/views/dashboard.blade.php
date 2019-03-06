@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-primary">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">52</div>
				<div align="center">Tooth Extraction</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-info">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">25</div>
				<div align="center">Pasta</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-warning" >
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">63</div>
				<div align="center">Prophylaxis </div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-danger">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">234</div>
				<div align="center">Prenatal</div>
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-success">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">52</div>
				<div align="center">Total Treatment</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white " style="background-color: #20c997;">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">25</div>
				<div align="center">Old Patient</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white" style="background-color: #f8cb00;">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">63</div>
				<div align="center">New Patient</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white" style="background-color: #17a2b8">
			<div class="card-body pb-0" style="height: 140px;">
				<div class="text-value" align="center" style="font-size: 40px;">234</div>
				<div align="center">Total Patient</div>
			</div>

		</div>
	</div>
</div>
<!-- Content -->
<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="text-muted">Calendar</h4>
				</div>
				
			</div>
			<hr />
			<div class="row">
				<div class="col">
					
					<div class="card">
						<div class="card-body">
							<center>
								<img src="/img/calendar.png">
							</center>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

@endsection