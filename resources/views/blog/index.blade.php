@extends('master')
	@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Simple CRUD</h1>
		</div>
	</div>
	<dir class="row">
		<table class="table table-responsive">
			<tr>
				<th>No.</th>
				<th>Title</th>
				<th>Descripsi</th>
				<th>Actions</th>
			</tr>

			<?php $no=1; ?>

			@foreach($blogs as $blog)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $blog->title }}</td>
				<td>{{ $blog->description }}</td>
				<td>
					<form class="" action="{{route('blog.destroy', $blog->id)}}" method="post">
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
						<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');" name="name" value="delete">
					</form>
				</td>
			</tr>

			@endforeach
		</table>
	</dir>


	@stop