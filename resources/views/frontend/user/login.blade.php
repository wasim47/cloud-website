   @include('layouts.header')
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Login /</h1>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
		<div class="container">
	       <div class="row">
			<div class="col-md-1"></div>
				  <div class="col-md-10">
						<div class="wrapper">




                             <form class="form-signin" method="POST" action="{{ route('user.login.submit') }}">
                       			 {{ csrf_field() }}       
								<h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
								  <hr class="colorgraph"><br>							  
                                  
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								  	<input style="background-color:#fff;" type="text" class="form-control" name="email" placeholder="Username" 
                                    value="{{ old('email') }}" required autofocus />
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                	@endif
                                  </div>
                                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								  	<input type="password" class="form-control" name="password" placeholder="Password" required/>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                	@endif
                                  </div>
                                  
                                  
                                    		  	 
								  <button class="btn btn-lg btn-primary btn-block"  name="submit" value="Login" type="submit">Login</button><br>
                                  <div class="col-sm-6"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} > Remember Me</div>
								  <div class="col-sm-6" style="padding-top:5px"><a href="{{ route('password.request') }}">Forgot password?</a></div>						  
							</form>	

                         

														
						</div>
				 </div>
				 <div class="col-md-1"></div>
				
	    </div>
        </div>

        @include('layouts.footer')