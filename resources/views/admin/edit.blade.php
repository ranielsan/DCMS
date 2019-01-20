@extends('layouts.app')
@section('content')
	<form method="post" action="{{ route('admin.update', $user->id) }}">
		{{ csrf_field() }}
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h4 class="text-muted">User Management</h4>
					</div>
				</div>
				<hr />
				<div class="card">
					<div class="card-body">
						<div class="row justify-content-center">
							<div class="col-md-5">
								<h4 >Update User Information</h4>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5">
								<hr />
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5">
								<div class="form-group">
									<label for="name" class="text-muted"><b>Name</b></label>
									<input type="text" name="name" id="name"class="form-control" placeholder="Name" required="" value="{{ $user->name }}">
								</div>	
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5">
								<div class="form-group">
									<label for="email" class="text-muted"><b>Email Address</b></label>
									<input type="email" name="email" id="email"class="form-control" placeholder="Email Address" required="" value="{{ $user->email }}">
								</div>	
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5">
								<div class="form-group">
									<label for="username" class="text-muted"><b>Username</b></label>
									<input type="text" name="username" id="username"class="form-control" placeholder="Username" required="" value="{{ $user->username }}">
								</div>	
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5">
								<div class="form-group">
									<label for="password" class="text-muted"><b>New Password</b></label>
									<input type="password" name="password" id="password"class="form-control" placeholder="Password" >
								</div>	
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5">
								<div class="form-group">
									<label for="confirm_password" class="text-muted"><b>Confirm Password</b></label>
									<input type="password" name="confirm_password" id="confirm_password"class="form-control" placeholder="Confirm Password" >
								</div>	
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-5">
								<a href="{{ route('admin.index') }}" class="btn btn-sm btn-danger">Cancel</a>
								<button class="btn btn-sm btn-success" style="float:right;">Submit</button>	
							</div>
						</div>
						<div class="row justify-content-center">
			                <div class="col-md-5">
			                    @if($errors->count())
			                    <div class="alert alert-danger">
			                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                                <span aria-hidden="true">&times;</span>
			                            </button>
			                        <ul>
			                            @foreach($errors->all() as $error)
			                            <li>{{$error}}</li>
			                            @endforeach
			                        </ul>
			                    </div>
			                    @endif
			                   
			                </div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection