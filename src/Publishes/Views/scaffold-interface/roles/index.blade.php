@extends('scaffold-interface.layouts.app')
@section('content')
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3>All Roles</h3>
		</div>
		<div class="box-body">
			<a href="{{url('roles/create')}}" class = "btn btn-success">create new role</a>
			<table class="table table-striped">
				<head>
					<th>Role</th>
					<th>Actions</th>
				</head>
				<tbody>
					@foreach($roles as $role)
					<tr>
						<td>{{$role->name}}</td>
						<td>
							<a href="{{url('/roles/edit')}}/{{$role->id}}" class = "btn btn-primary">edit</a>
							<a href="{{url('/roles/delete')}}/{{$role->id}}" class = "btn btn-danger">delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection