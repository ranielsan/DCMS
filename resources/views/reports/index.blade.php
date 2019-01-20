@extends('layouts.app')
@section('content')
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<h4 class="text-muted">Activity Log</h4>

			</div>

			<div class="col-md-6">
				<!-- <a href="#" class="btn btn-sm btn-success" style="float: right;">Create Schedule</a> -->
			</div>
		</div>
		<hr/>

		<table class="table" id="Tbl">
			<thead>
				<tr>
					<th>id</th>
					<th>description</th>
					<th>date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Add treatment to Raniel Santiago Patient</td>
					<td>January 24, 2019</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Update Information for Raniel Santiago</td>
					<td>January 24, 2019</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection