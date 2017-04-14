@extends('layout.new')
	@section('content')
	<div class="row">
		
	</div>

	<div class="box">
		<div class="box-title">
			<h2>Tambah Nasabah</h2>
		</div>
		<div class="box-body">
			<form class="" action="{{ route('nasabah.store') }} " method="POST">
				{{ csrf_field() }}
				<div class="form-group{{ ($errors->has('nip')) ? $errors->first('nip') : '' }}">
				<input type="text" name="nip" class="form-control" placeholder="Masukan NIP">
				{!! $errors->first('nip', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group{{ ($errors->has('nama')) ? $errors->first('nama') : '' }}">
				<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Nasabah">
				{!! $errors->first('nama', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
				<input type="email" name="email" class="form-control" placeholder="Masukan E-mail">
				{!! $errors->first('email', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group {{ ($errors->has('alamat')) ? $errors->first('alamat') : '' }}">
				<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
				{!! $errors->first('alamat', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group{{ ($errors->has('password')) ? $errors->first('password') : '' }}">
				<input type="text" name="password" class="form-control" placeholder="Password">
				{!! $errors->first('password', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Simpan" />
				</div>
			</form>
		</div>
	</div>
	@stop