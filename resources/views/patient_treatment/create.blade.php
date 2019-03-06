@extends('layouts.app')
@section('content')
<form method="post" action="{{route('patient.patient_treatment.store', $patient->id)}}">
	{{ csrf_field() }}
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
	                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{ date('F d, Y', strtotime($dateNow)) }}</td>
	                     		</tr>
	                     	</table>
	                    </div>
                    </div>
                    <br/>
                    <hr/>
                    <div class="row">
                    	<div class="col-md-12">
                    		<center>
                    			<img src="/img/tooth-chart.jpg" width="700">
                    		</center>
                    	</div>
                    </div>
					<div class="row">
						<div class="col-md-3">
							<h5 for="treatment_type">Treatment Type :</h5>
                        </div>
                        <div class="col-md-8">
                        	<input type="text" name="treatment_type" id="treatment_type" class="form-control" />
                        </div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-3">
							<h5 for="treatment_type">Description :</h5>
                        </div>
                        <div class="col-md-8">
                        	<textarea rows="5" cols="100" name="description" class="form-control"></textarea>
                        </div>
					</div>
					<br/>
					<div class="row">
						<div class="col">
							<a href="{{ route('patient.show', $patient->id)}}" class="btn btn-sm btn-danger">Cancel</a>
							<button type="submit" class="btn-sm btn btn-success" style="float: right;">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection