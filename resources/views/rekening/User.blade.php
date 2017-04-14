@extends('layout.user')
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
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });


    
  });
</script>
<div class="box">
            <div class="box-header">
              <h2 class="box-body">Buku tabungan</h2>
              <h3 class="box-body"> {{ Auth::user()->name }} </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
             <th>NO</th>
             <th>Nip</th>
             <th>Debet</th>
             <th>Kridit</th>
             <th>Saldo</th>
             <th>Tanggal</th>
            </thead>
      <?php $no=1; ?>
            <tbody>
             @foreach($nasabah as $nasabah) 
            <tr>
             <td>{{ $no++ }}</td>
              <td>{{ $nasabah->nip }}</td>
              <td>{{ $nasabah->debet }}</td>
              <td>{{ $nasabah->kridit }}</td>
              <td>{{ $nasabah->saldo }}</td>
              <td>{{ $nasabah->created_at }}</td>
            </tr>
            @endforeach
            </tbody>
    </table>
  </div>
</div>
@stop