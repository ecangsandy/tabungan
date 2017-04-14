@extends('layout.new')
	@section('content')
	<div class="row">
		
	</div>

	<div class="box">
		<div class="box-title">
			<h2>Debet Nasabah</h2>
		</div>
		<div class="box-body">
			<form class="" action="{{ route('debet.store') }} " method="POST">
				{{ csrf_field() }}
				<input class="hidden" name="admin" value="{{ Auth::user()->id }}">
				<div class="form-group{{ ($errors->has('id_user')) ? $errors->first('nip') : '' }}">
				<label for="id_user">Last Name</label>
			        <select class="form-control select2" name="id_user" data-parsley-required="true" required>
			        	<option selected="selected" disabled="disabled">NIP</option>
			          @foreach ($user as $sn) 
			          {
			            <option value="{{ $sn->id }}">{{ $sn->nip }}</option>
			          }
			          @endforeach
			        </select>
				{!! $errors->first('id_user', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group{{ ($errors->has('debet')) ? $errors->first('debet') : '' }}">
				<label for="">Nominal </label>
				<input type="text" name="debet" class="form-control" placeholder="Masukan Nominal Rupiah">
				{!! $errors->first('debet', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group {{ ($errors->has('keterangan')) ? $errors->first('keterangan') : '' }}">
				<textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
				{!! $errors->first('alamat', '<p class="help-block">:message </p>') !!}
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Simpan" />
				</div>
			</form> 
		</div>
	</div>

	@stop