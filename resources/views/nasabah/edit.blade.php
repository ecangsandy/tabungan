@extends('layout.new')
	@section('content')
	<div class="row">
		<div class="col-md-12">
			<h2>Edit Nasabah</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form class="" action="{{ route('nasabah.update',$nasabah->id) }} " method="POST">
			<input type="hidden" name="_method" value="PATCH">
				{{ csrf_field() }}
				<div class="form-group{{ ($errors->has('nip')) ? $errors->first('nip') : '' }}">
				<input type="text" name="nip" class="form-control" placeholder="Masukan NIP" value="{{$nasabah->nip}}">
				{!! $errors->first('nip', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group{{ ($errors->has('nama')) ? $errors->first('nama') : '' }}">
				<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Nasabah" value="{{$nasabah->name}}">
				{!! $errors->first('nama', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
				<input type="email" name="email" class="form-control" placeholder="Masukan E-mail" value="{{$nasabah->email}}">
				{!! $errors->first('email', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group {{ ($errors->has('alamat')) ? $errors->first('alamat') : '' }}">
				<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="{{$nasabah->alamat}}">
				{!! $errors->first('alamat', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group{{ ($errors->has('password')) ? $errors->first('password') : '' }}">
				<input type="text" name="password" class="form-control" placeholder="Password" value="{{$nasabah->nip}}">
				{!! $errors->first('password', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Simpan" />
				</div>
			</form>
		</div>
	</div>
	@stop