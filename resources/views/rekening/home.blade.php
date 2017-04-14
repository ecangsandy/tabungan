@extends('layout.user')
@section('content')
  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">

  <style>
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom:20px;
            }
        </style>


<div class="row">
<div class="content">
<div class="title m-b-md">
                    <p>Selamat Datang <br/> 
                    <strong>{{ Auth::user()->name }}</strong></p>
                </div>
                </div>
</div>
@stop