@extends('layouts.app')
@section('content')
<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<h4 class="text-muted">Treatment Information Form</h4>
				</div>
			</div>
			<hr />
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
	                     	<table width="100%">
	                     		<tr>
	                     			<td style="font-size: 15px; width: 80px;"><strong>Name :</strong></td>
	                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->name}}</td>
	                     		</tr>
	                     	</table>
	                    </div>
	                    <div class="col-md-6">
	                     	<table width="100%">
	                     		<tr>
	                     			<td style="font-size: 15px; width: 80px;"><strong>Date :</strong></td>
	                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{ date('F d, Y', strtotime($patient->created_at)) }}</td>
	                     		</tr>
	                     	</table>
	                    </div>
                    </div>
                    <br/>
                    <hr/>
					<div class="row">
						<div class="col-md-3">
							<h5 for="treatment_type">Treatment Type :</h5>
                        </div>
                        <div class="col-md-8">
                        	<h5 style=" border-bottom: 1px solid black;">{{$treatment->treatment_type}}</h5>
                        </div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-3">
							<h5 for="treatment_type">Description :</h5>
                        </div>
                        <div class="col-md-8">
                        	<h5 style=" border-bottom: 1px solid black;">{{$treatment->description}}</h5>
                        </div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-3">
							<h5 for="treatment_type">Created at :</h5>
                        </div>
                        <div class="col-md-8">
                        	<h5 style=" border-bottom: 1px solid black; width: 200px;">{{ date('F d, Y', strtotime($treatment->created_at)) }}</h5>
                        </div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-3">
							<h5 for="treatment_type">Updated at :</h5>
                        </div>
                        <div class="col-md-8">
                        	<h5 style=" border-bottom: 1px solid black; width: 200px;">{{ date('F d, Y', strtotime($treatment->updated)) }}</h5>
                        </div>
					</div>
					<br/>
					<br/>
					<div class="row">
						<div class="col">
							<a href="{{ route('patient.show', $patient->id)}}" class="btn btn-sm btn-danger">Back</a>
							<a href="{{ route('patient.patient_treatment.edit', [$patient->id, $treatment->id])}}" class="btn btn-sm btn-success" style="float: right;">Edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection