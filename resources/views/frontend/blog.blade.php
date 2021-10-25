     @include('layouts.header')
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Our Blog /</h1>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
		<!-- PART ONE-->

        @foreach($blogs as $blog)
        
		<div class="container">
	            <div class="row">
				<div class="col-md-1"></div>
				 <div class="col-md-10">
					<div class="panel panel-default">
					  <div class="panel-heading phead">{{ $blog->title }}</div>
					  <div class="panel-body">{!! $blog->short_desc !!} 
					  <table>
					  <tr>
					  <td><i class="fa fa-user" aria-hidden="true"></i></td>

					  <td class="bloguser">{{ $blog->postBy }}</td>
					  
					  </tr>
					  </table>
					 
					  </div>
					</div>
				 </div>
				 <div class="col-md-1"></div>
				</div>
				
		</div>
       @endforeach

                
 @include('layouts.footer')