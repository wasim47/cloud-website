@include('admin.includes.tophead')
  <body>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">

          <section class="login_content{{ $errors->has('email') ? ' has-error' : '' }}">
            <img src="{{ URL::asset('frontend/img/logo.png') }}" alt="...">
            <form class="form-horizontal" method="POST" action="{{ route('administrator.login') }}">
                        {{ csrf_field() }}
              
              <h1>Admin Login</h1>
              <div class="col-sm-12">
                <input type="text" class="form-control" placeholder="Username"  name="email" value="{{ old('email') }}" required autofocus />
                 @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="col-sm-12">
                <input type="password" class="form-control" placeholder="Password" name="password" required />
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6 pull-left"  style="margin:0; padding:0"><input type="submit" class="btn btn-submit" value="Login"></div>
                <div class="col-sm-6 pull-right" style="margin:0; padding:0"><a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a></div>
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
