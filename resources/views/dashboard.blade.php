@extends('layout.new')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <span class="col-sm-6"><h2>Selamat Datang</h2></span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <a href="{{ route('debet.create') }} " class="col-sm-6 btn btn-lg btn-primary btn-block btn-huge">DEBIT</a>

            <a href="{{ route('kridit.create') }} " class="col-sm-6 btn btn-lg btn-success btn-block btn-huge">KRIDIT</a>
        </div>
    </div>
</div>

<style type="text/css">
    .btn-huge{
    padding-top:30px;
    padding-bottom:20px;
}
</style>
@endsection
