@extends('layouts.app')
@section('content')
@if (session('success_alert'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('success_alert') }}
        </div>
@endif
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="text-muted">Patient Record</h4>
				</div>
				<div class="col-md-6">
					<a href="{{route('patient.create')}}" class="btn btn-sm btn-success" style="float: right;">Add new patient</a>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col">
					<table class="table" id="Tbl">
						<thead>
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Email Address</th>
								<th>Cellphone No.</th>
								<th>Sex</th>
								<th>Age</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($patients as $patient)
							<tr>
								<td>{{$patient->id}}</td>
								<td>{{$patient->name}}</td>
								<td>{{$patient->email}}</td>
								<td>{{$patient->cell_phone}}</td>
								<td>{{$patient->sex}}</td>
								<td>{{$patient->age}}</td>
								<td>{{ date('F d, Y', strtotime($patient->created_at)) }}</td>
								<td>
									<a href="{{ route('patient.show', $patient->id)}}" class="btn btn-primary btn-sm"><i class="icon-magnifier"></i></a>
									<a href="{{ route('patient.edit', $patient->id)}}" class="btn btn-secondary btn-sm"><i class="icon-pencil"></i></a>
									<a href ="{{ route('patient.delete', $patient->id)}}" class="btn btn-sm btn-danger" data-method="delete" id="delete"><i class="fa fa-inbox"></i></a>
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