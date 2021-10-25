<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Click piper Dashboard</title>
    <!-- Bootstrap Styles-->
    <link href="{{ URL::asset('frontend/user/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ URL::asset('frontend/user/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ URL::asset('frontend/user/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ URL::asset('frontend/user/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
</head>

<body>
    <div id="wrapper" style="background-color:#4a494a;">
            
        <nav class="navbar navbar-default top-navbar" role="navigation">
		
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse" 
                style="background-color:#f37553;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
				<a class="navbar-brand" href="index.html"><img src="{{ URL::asset('frontend/user/img/logo.png') }}"></a>
				
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
               <!--<span class="dashb">Dashboard</span>-->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gift"></i> Offers</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-map-marker"></i> Tracking Domain</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode"></i> Reports</a>
                    </li>
                    
				</ul>
					<!--General section -->
					<ul class="nav" id="main-menu">
						<li>
							<a class="active-menu"><i class="fa fa-cog"></i>General</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-user"></i>Click data </a>
						</li>
						 <li>
							<a href="#"><i class="fa fa-archive"></i>Archives </a>
						</li>
						 <li>
							<a href="#"><i class="fa fa-usd"></i>Payments</a>
						</li>
						 <li>
							<a href="#"><i class="fa fa-edit"></i>Alerts </a>
						</li>

						 <li>
							<a href="#"><i class="fa fa-arrows"></i>Cash flow </a>
						</li>
						 <li>
							<a href="#"><i class="fa fa-user"></i> Profile </a>
						</li>
						
						 <li>
							<a href="#"><i class="fa fa-inbox"></i>Resources </a>
						</li>
						
						 <li>
							<a href="#"><i class="fa fa-refresh"></i> Referrals </a>
						</li>
						
						 <li>
							<a href="#"><i class="fa fa-globe"></i>Global Post back </a>
						</li>
						 <li>
							<a href="#"><i class="fa fa-sign-out"></i>Logout </a>
						</li>

                    <!--<li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>-->
                    
                </ul>

            </div>
			<table class="table">
			<thead>
			<tr>
			<td class="color1">copy &copy Click Piper</td>
			</tr>
			</thead>
			<tr>
			<td class="color1">Find us on
			<a href="#"><i class="fa fa-instagram color1" aria-hidden="true"></i></a>

			</td>
			<td class="color1">Facebook<a href="#"><i class="fa fa-thumbs-up color1 tabletr" aria-hidden="true"></i></a></td>

			</tr>
			</table>

        </nav>
        <!-- /. NAV SIDE  -->
        
        
