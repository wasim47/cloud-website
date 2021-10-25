@include('layouts.header')
 <div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">				
				<li><img src="{{ URL::asset('frontend/img/slider/5.jpg') }}" alt=""/></li>								
				<li><img src="{{ URL::asset('frontend/img/slider/6.jpg') }}" alt=""/></li>	
				<li><img src="{{ URL::asset('frontend/img/slider/7.jpg') }}" alt=""/></li>			
			</ul>
		</div>	
    </div>
	
    
	<div class="container">
		<div class="row">				
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="align-center">
						<h4>Quick Support</h4>					
						<div class="icon">
							<i class="fa fa-heart-o fa-3x"></i>
						</div>
						<p>
						 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
					<div class="align-center">
						<h4>Web Design</h4>				
						<div class="icon">
							<i class="fa fa-desktop fa-3x"></i>
						</div>
						<p>
						 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
					<div class="align-center">
						<h4>Easy Customize</h4>					
						<div class="icon">
							<i class="fa fa-location-arrow fa-3x"></i>
						</div>
						<p>
						 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
						</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
			</div>				
		</div>
	</div>
    

    <div class="box">
		<div class="container">
			<div class="row">			
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-thumbnail">
							<img src="{{ URL::asset('frontend/img/team/1.jpg') }}" alt="" >			
							<div class="caption">
								<h3>John Doe</h3>
								<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
								<a href="#" class="btn btn-default" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-thumbnail">
							<img src="{{ URL::asset('frontend/img/team/2.jpg') }}" alt="" >			
							<div class="caption">
								<h3>Hidayah</h3>
								<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
								<a href="#" class="btn btn-default" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="img-thumbnail">
							<img src="{{ URL::asset('frontend/img/team/4.jpg') }}" alt="" >			
							<div class="caption">
								<h3>John Doe</h3>
								<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam. </p>
								<a href="#" class="btn btn-default" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>				
			</div>	
		</div>
    </div>
    
	<div class="jumbotron">
		<h1>We can <span>help build your</span> project!</h1>
		<p>Voluptatem accusantium doloremque laudantium sprea totam rem aperiam</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Get it now</a></p>
	</div>
    
    @include('layouts.footer')