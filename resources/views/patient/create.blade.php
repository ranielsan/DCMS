@extends('layouts.app')
@section('content')
<form method="post" action="{{ route('patient.store') }}">
	{{ csrf_field() }}
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<h4 class="text-muted">New Patient Information Form</h4>
				</div>
			</div>
			<hr />
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="name" class="text-muted"><b>Name</b></label>
								<input type="text" name="name" id="name"class="form-control" placeholder="Name" required="">
							</div>	
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="date" class="text-muted"><b>Date</b></label>
								<div class="input-group">
		                            <span class="input-group-addon">
		                                <i class="fa fa-calendar"></i>
		                            </span>
		                            <input type="date" class="form-control" name="date" id="date"value="{{ now()->toDateString() }}" disabled="">
		                        </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="form-group">
								<label for="address" class="text-muted"><b>Address</b></label>
								<input type="text" name="address" id="address"class="form-control" placeholder="Address" required="">
							</div>	
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="city" class="text-muted"><b>City</b></label>
								<input type="text" name="city" id="city"class="form-control" placeholder="City" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="province" class="text-muted"><b>Province</b></label>
								<input type="text" name="province" id="province"class="form-control" placeholder="Province" required="">
							</div>	
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="postal_code" class="text-muted"><b>Postal Code</b></label>
								<input type="text" name="postal_code" id="postal_code"class="form-control numInput" placeholder="Postal Code" required="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email" class="text-muted"><b>Email Address</b></label>
								<input type="email" name="email" id="email"class="form-control" placeholder="Email Address" required="">
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="home_phone" class="text-muted"><b>Home Phone</b></label>
								<input type="text" name="home_phone" id="home_phone"class="form-control numInput" placeholder="Home Phone">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="work_phone" class="text-muted"><b>Work Phone</b></label>
								<input type="text" name="work_phone" id="work_phone"class="form-control numInput" placeholder="Work Phone" >
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="cell_phone" class="text-muted"><b>Cell Phone</b></label>
								<input type="text" name="cell_phone" id="cell_phone"class="form-control numInput" placeholder="Cell Phone" >
							</div>
						</div>
						
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="date_of_birth" class="text-muted"><b>Date of Birth</b></label>
								<div class="input-group">
		                            <span class="input-group-addon">
		                                <i class="fa fa-calendar"></i>
		                            </span>
		                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required="">
		                        </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="age" class="text-muted"><b>Age</b></label>
								<input type="text" name="age" id="age"class="form-control numInput" placeholder="Age" required="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="sex" class="text-muted"><b>Sex</b></label>
								<input type="text" name="sex" id="sex"class="form-control" placeholder="Sex" required="">
							</div>
						</div>
					</div>
					<br/>
					<hr/>
					<div class="text-muted" style="font-style: italic;">In case of emergency</div>
					<br/>
					<br/>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="person_to_contact" class="text-muted"><b>Person to contact</b></label>
								<input type="text" name="person_to_contact" id="person_to_contact"class="form-control" placeholder="Person to Contact" required="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="relationship_to_patient" class="text-muted"><b>Relationship to Patient</b></label>
								<input type="text" name="relationship_to_patient" id="relationship_to_patient"class="form-control" placeholder="Relationship to Patient" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="phone" class="text-muted"><b>Phone</b></label>
								<input type="text" name="phone" id="phone"class="form-control numInput" placeholder="Phone" required="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<a href="{{ route('patient.index') }}" class="btn btn-sm btn-danger">Cancel</a>
							<button class="btn btn-sm btn-success" type="submit" style="float: right;">Submit</button>
				</div>
			</div>
		</div>

	</div>
</form>
@endsection