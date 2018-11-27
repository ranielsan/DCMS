@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-body">
			<div class="row justify-content-center">
        		<div class="col-md-5">
					<div class="card">
						<div class="card-body">
							<h4>Change Password</h4>
							<hr/>
							<h6 class="text-muted">Old Password</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="text" name="password" class="form-control" required placeholder="Old Password">
                            </div>
                            <h6 class="text-muted">New Password</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="text" name="password" class="form-control" required placeholder="New Password">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="text" name="password" class="form-control" required placeholder="Confirm Password">
                            </div>
                            <a href="{{ URL::previous() }}" class="btn btn-md btn-danger">Back</a>
                            <input type="submit" name="submit" class="btn btn-md btn-success" style="float: right;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection