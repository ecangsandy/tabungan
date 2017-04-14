<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
      <link rel="stylesheet" href="/css/style.css">


  
</head>

<body>
  <h1>Login Admin</h1>
  <br />

<div class="container">   
      <form method="POST" action="{{ route('admin.login.submit') }}">
      {{ csrf_field() }}
      <div class="form">
        <span class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"></span>
        <input type="email" id="email" name="email" class="zocial-dribbble" placeholder="Enter your email" required />
        {{-- <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> --}}
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        <input id="password" class="zocial-dribbble" type="password" placeholder="Password"  name="password" required />
        {{-- <input id="password" type="password" class="form-control" name="password" required> --}}
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
         <input type="submit" value="Login" />
        <a href="">Lost your password?</a> <br/>
        </div> 
        </form>
      

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>