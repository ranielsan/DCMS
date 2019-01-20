@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<h4 class="text-muted">Patient Information</h4>
				</div>
			</div>
			<div class="row mt-4 mb-4">
	            <div class="col">
	                <ul class="nav nav-tabs" role="tablist">
	                    <li class="nav-item">
	                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"><h5> Overview</h5></a>
	                    </li>
	                </ul>

	                <div class="tab-content">
	                     <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
	                     	<br/>

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
			                 
			                <div class="row">
	                     		<div class="col-md-7">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 100px;"><strong>Address :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->address}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                    <div class="col-md-5">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 60px;"><strong>City :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->city}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                </div>

			                <div class="row">
	                     		<div class="col-md-4">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 100px;"><strong>Province :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->province}}</td>
			                     		</tr>
			                     	</table>
			                     </div>
			                     <div class="col-md-3">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 115px;"><strong>Postal Code :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->postal_code}}</td>
			                     		</tr>
			                     	</table>
			                     </div>
			                     <div class="col-md-5">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 120px;"><strong>Email Address :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->email	}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                </div>
			                 
			                <div class="row">
	                     		<div class="col-md-4">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 110px;"><strong>Home Phone :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->home_phone}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                    <div class="col-md-4">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 115px;"><strong>Work Phone :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->work_phone}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                   	<div class="col-md-4">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 90px;"><strong>Cellphone :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->cell_phone	}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                </div>

			                <div class="row">
	                     		<div class="col-md-4">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 130px;"><strong>Date of Birth :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{ date('F d, Y', strtotime($patient->date_of_birth)) }}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                    <div class="col-md-4">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 60px;"><strong>Age :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->age}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                   	<div class="col-md-4">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 60px;"><strong>Sex :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->sex	}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                </div>
	                     	<br/>
	                     	<div class="row">
	                     		<div class="col">
	                     			<div style="width: 100%; border-top: 1px solid black;"><i>In case of emergency</i>
	                     			</div>
	                     		</div>
	                     	</div>
	                     	<br/>

	                     	<div class="row">
	                     		<div class="col-md-6">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 140px;"><strong>Person to Contact :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->person_to_contact}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                    <div class="col-md-6">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 180px;"><strong>Relationship to Patient :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->relationship_to_patient}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                </div>
			                <div class="row">
	                     		<div class="col-md-6">
			                     	<table width="100%">
			                     		<tr>
			                     			<td style="font-size: 15px; width: 140px;"><strong>Contact No. :</strong></td>
			                     			<td style="font-size: 15px; border-bottom: 1px solid black;">{{$patient->phone}}</td>
			                     		</tr>
			                     	</table>
			                    </div>
			                </div>
			                <br/>
			                <hr/>
			                <div class="row">
			                	<div class="col-md-6">
			                		<h4>Treatments:</h4>
			                	</div>
			                	<div class="col-md-6">
			                		<a href="{{ route('patient.patient_treatment.create', $patient->id) }}" class="btn btn-sm btn-success" style="float: right;" title="Add Treatment"><i class="icon-plus"></i></a>
			                	</div>
			                </div>
			                <div class="row">
			                	<div class="col">
			                		<table class="table" id="Tbl">
			                			<thead>
			                				<tr>
			                					<th>Date</th>
			                					<th>Treatment Type</th>
			                					<th>Description</th>
			                					<th>Action</th>
			                				</tr>
			                			</thead>
			                			<tbody>
			                				@foreach($patient->treatments as $treatment)
			                				<tr>
			                					<td>{{ date('F d, Y', strtotime($treatment->created_at)) }}</td>
			                					<td width="150px">{{$treatment->treatment_type}}</td>
			                					<td width="400px">{{$treatment->description}}</td>
			                					<td>
			                						<a href="{{route('patient.patient_treatment.show', [$patient->id, $treatment->id])}}" class="btn btn-sm btn-success"><i class="icon-magnifier"></i></a>
			                						<a href="{{ route('patient.patient_treatment.edit', [$patient->id, $treatment->id])}}" class="btn btn-sm btn-secondary"><i class="icon-pencil"></i></a>
			                						<a href ="{{ route('patient.patient_treatment.delete', [$patient->id, $treatment->id])}}" class="btn btn-sm btn-danger" data-method="delete" id="delete"><i class="fa fa-inbox"></i></a>
			                					</td>
			                				</tr>
			                				@endforeach
			                			</tbody>
			                		</table>
			                	</div>
			                </div>

	                    </div><!--tab -->
	                </div><!--tab-content-->
	            </div><!--col-->
	        </div><!--row-->

@endsection