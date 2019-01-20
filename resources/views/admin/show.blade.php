@extends('layouts.app')
@section('content')
	<div class="card">
	    <div class="card-body">
	        <div class="row">
	            <div class="col-sm-5">
	                <h4 class="card-title mb-0">
	                    User Management
	                    
	                </h4>
	            </div><!--col-->
	        </div><!--row-->

	        <div class="row mt-4 mb-4">
	            <div class="col">
	                <ul class="nav nav-tabs" role="tablist">
	                    <li class="nav-item">
	                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"> Overview</a>
	                    </li>
	                </ul>

	                <div class="tab-content">
	                     <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
	                     	<div class="row justify-content-center">
	                     		<img src="/img/user-logo.jpg" width="200" height="200">
	                     	</div>
	                        <table class="form-group table">
	                        	<tr>
	                        		<th>Name</th>
	                        		<td>{{$user->name}}</td>
	                        	</tr>
	                        	<tr>
	                        		<th>Email Address</th>
	                        		<td>{{$user->email}}</td>
	                        	</tr>
	                        	<tr>
	                        		<th>Username</th>
	                        		<td>{{$user->username}}</td>
	                        	</tr>
	                        	<tr>
	                        		<th>Role</th>
	                        		<td>{{$user->role_name}}</td>
	                        	</tr>
	                        	<tr>
	                        		<th>Created at</th>
	                        		<td>{{$user->created_at}}</td>
	                        	</tr>
	                        	<tr>
	                        		<th>Updated at</th>
	                        		<td>{{$user->updated_at}}</td>
	                        	</tr>

	                        </table>
	                    </div><!--tab -->
	                </div><!--tab-content-->
	            </div><!--col-->
	        </div><!--row-->
	    </div><!--card-body-->

	    <div class="card-footer">
	        <div class="row">
	            <div class="col">
	                asd
	            </div><!--col-->
	        </div><!--row-->
	    </div><!--card-footer-->
	</div><!--card-->
@endsection