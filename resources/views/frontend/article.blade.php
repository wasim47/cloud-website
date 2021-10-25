     @include('layouts.header')
		
		
			
		
		 <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-user"></i>
                        <h1>{{ $currentMenu }}</h1>
                        <p>Below you can find more information about our company</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us-text wow fadeInLeft">
	                    <h3>{{ $title }}</h3>
	                    <p>
	                    	{!! $content !!}
	                    </p>
							<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">
							  Read More
							</button>

							<div id="demo" class="collapse">
							  <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
							  nisi ut aliquip ex ea commodo consequat.
							</div> 
	                </div>
	            </div>
	        </div>
        </div>

 @include('layouts.footer')