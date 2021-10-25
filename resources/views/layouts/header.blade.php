<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dewi Multi-purpose theme</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/jquery.bxslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/isotope.css') }}" media="screen" />	
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/animate.css') }}">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
	<link href="{{ URL::asset('frontend/css/style.css') }}" rel="stylesheet">	
  </head>
  <body>
  
<header>
    <nav div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <ul class="social-network">
                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
            </ul>
            <ul class="info">
                <li><p><i class="fa fa-phone"></i>+1 769 525 422 5663</p></li>
                <li><a href="#"><i class="fa fa-envelope"></i>hello@Dewi.com</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navigation">
            <div class="container">					
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="/"><h1><span>D</span>ewi</h1></a>
                    </div>
                </div>
                
                <div class="navbar-collapse collapse">							
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="/" class="active">Home</a></li>
                            @foreach($menus as $menu)
                        	<?php 
							if($menu->menu_url!="")
                            	$url = $menu->menu_url;
                            else
                           	   $url = 'pages/'.$menu->slug;
							?>
						<li role="presentation">
							<a href="{{ url($url)  }}">{{ $menu->menuname }}</a>
						</li>
						@endforeach					
                        </ul>
                    </div>
                </div>						
            </div>
        </div>	
    </nav>		
</header>