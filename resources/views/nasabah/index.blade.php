@extends('layout.new')
@section('content')
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">
{{-- <script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script> --}}
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });   
  });
</script>
<div class="box">
            <div class="box-header">
              	<h3 class="box-title">Data Nasabah</h3><br/>
            	<a href="{{ route('nasabah.create') }}" class="btn btn-success">Add</a>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
            
		<table id="example1" class="table table-bordered table-striped">
			<thead>
             <th>NO</th>
             <th>Nip</th>
             <th>Nama</th>
             <th>Email</th>
             
             <th>Actions</th>
            </thead>
			<?php $no=1; ?>
			<tbody>
             @foreach($nasabah as $nasabah)
             
             <tr>
             <td>{{ $no++ }}</td>
			<td>{{ $nasabah->nip }}</td>
			<td>{{ $nasabah->name }}</td>
			<td>{{ $nasabah->email }}</td>
			
			<td>
				<form class="" action="{{route('nasabah.destroy', $nasabah->id)}}" method="post">
					<input type="hidden" name="_method" value="delete">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<a href="{{ route('nasabah.edit',$nasabah->id) }}" class="btn btn-primary">Edit</a>
					<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');" name="name" value="delete">
				</form>
			</td>
			</tr>
            @endforeach
            </tbody>
		</table>
	</div>
</div>
@stop