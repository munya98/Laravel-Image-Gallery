@extends('layouts.admin')
@section('title')
	Users
@endsection
@section('content')
<div class = "row">
	<div class = "col-md-12">
		<form>
			<div class = "form-group">
				<input id = "admin-user-search" class = "form-control" type="text" name="search" placeholder="Search...">
			</div>
		</form>
		<table class = "table table-striped text-right" id = "users-table">
			<tr>
				<th></th>
				<th class = "text-right">Name</th>
				<th class = "text-right">Username</th>
				<th class = "text-right">Status</th>
				<th class = "text-right">Joined</th>
				<th class = "text-right">Last Edited</th>
			</tr>
			@foreach($users as $user)
			<tr>
				<td><a href="{{ url('/admin/users/' . $user->id)}}">View</a></td>
				<td>{{ $user->name}}</td>
				<td>{{ $user->username}}</td>
				@if($user->active == 1)
					<td>Active</td>
				@else
					<td>Suspended</td>
				@endif
				<td>{{ $user->created_at}}</td>
				<td>{{ $user->updated_at }}</td>				
			</tr>
			@endforeach
		</table>
		{{ $users->links() }}
	</div>
</div>
@endsection