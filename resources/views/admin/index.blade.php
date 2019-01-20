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
					<h4 class="text-muted">User Management</h4>
				</div>
				<div class="col-md-6">
					<a href="{{ route('admin.create') }}" class="btn btn-sm btn-success" style="float: right;">Add new user</a>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col">
					<table id="Tbl" class="table">
						<thead>
							<tr>
								<td>Name</td>
								<td>Email</td>
								<td>Username</td>
								<td>Role</td>
								<td>Date</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								@if($user->role_name == 'Administrator')
									<tr>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->username}}</td>
										<td>{{$user->role_name}}</td>
										<td>{{$user->date}}</td>
										<td class="text-muted">No Action</td>
									</tr>
								@else
									<tr>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->username}}</td>
										<td>{{$user->role_name}}</td>
										<td>{{ date('F d, Y', strtotime($user->created_at)) }}</td>
										<td>
											<a href="{{ route('admin.show', $user->id) }}" class="btn btn-sm btn-primary"><i class="icon-magnifier"></i></a>
											<a href="{{ route('admin.edit', $user->id) }}" class="btn btn-sm btn-primary"><i class="icon-pencil"></i></a>
										</td>
									</tr>
								@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection