@extends('layouts.app')
@section('content')
<form method="get" action="{{ route('changepassword.update') }}">
	<div class="card">
		<div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-5">
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
							<h4>Change Password</h4>
							<hr/>
							<h6 class="text-muted">Old Password</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="text" name="old_password" class="form-control" required placeholder="Old Password">
                            </div>
                            <h6 class="text-muted">New Password</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="text" name="new_password" class="form-control"  placeholder="New Password">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input type="text" name="confirm_password" class="form-control"  placeholder="Confirm Password">
                            </div>
                            <a href="{{ URL::previous() }}" class="btn btn-md btn-danger">Back</a>
                            <input type="submit" name="submit" class="btn btn-md btn-success" style="float: right;">
						</div>
					</div>
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
                    @if (session('alert'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('alert') }}
                        </div>
                    @endif
                </div>
            </div>
		</div>
	</div>
</form>
@endsection