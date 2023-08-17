<!DOCTYPE>
<html>
    <head>
           <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap.css')}}" rel="stylesheet">
    </head>
<body class="text-center">
    <form method="POST" action="/auth" class="form-signin">
    @csrf <!-- {{ csrf_field() }} -->
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Click to Login"/>
    </form>
  </body>
    </html>