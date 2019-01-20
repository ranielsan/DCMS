@extends('layouts.app')
@section('content')
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<h4 class="text-muted">Schedule</h4>

			</div>

			<div class="col-md-6">
				<a href="#" class="btn btn-sm btn-success" style="float: right;">Create Schedule</a>
			</div>
		</div>
		<hr/>
		<table class="table" id="Tbl">
			<thead>
				<tr>
					<th>ID</th>
					<th>Event</th>
					<th>Start</th>
					<th>End</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>1 PM Raniel Santiago</td>
					<td>January 25, 2019 8:00 AM</td>
					<td>January 25, 2019 11:00 AM</td>
					<td>
						<a href="#" class="btn btn-primary btn-sm"><i class="icon-magnifier"></i></a>
						<a href="#" class="btn btn-secondary btn-sm"><i class="icon-pencil"></i></a>
						<a href="#" class="btn btn-sm btn-danger" data-method="delete" id="delete"><i class="fa fa-inbox"></i></a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection