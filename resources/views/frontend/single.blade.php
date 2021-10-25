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
        
		<div class="container">
	            <div class="row">
				<div class="col-md-1"></div>
				 <div class="col-md-10">
					  <h1 style="color:#f37653;">{{ $blogdetails->title }}</h1>
					  <div class="panel-body">{!! $blogdetails->full_desc !!}</div>
					  <p class="bloguser"><i class="fa fa-user" style="color:#f37653;" aria-hidden="true"></i> {{ $blogdetails->postBy }}</p>
					  <hr>
				 </div>
				 <div class="col-md-1"></div>

				</div>

				<div class="row">
				<div class="col-md-1"></div>
				 <div class="col-md-10">
					  <h2>Previous Comments</h2>
					  <hr>
					  <div class="comments">
					 	<ul class="list-group">
					 		@foreach($blogdetails->comments as $comment)
					 		<li class="list-group-item"><strong> {{ $comment->created_at->diffForHumans() }}:</strong>  {{ $comment->comment_msg }} </li>
					 		@endforeach
					 	</ul>
					 </div>
					 <hr>
				 </div>
				 <div class="col-md-1"></div>

				</div>
				

				<div class="row">
					<!-- email box-->
					<form method="POST" action="/pages/blog/{{ $blogdetails->slug }}/comments">

						{{ csrf_field() }}

						<input type="hidden" value="{{ $blogdetails->id }}" name="blog_id">
					<div class="col-md-1"></div>
					<div class="col-sm-5 wow fadeIn" align="left">
					  <div class="form-group">
					    <label for="comment_title"><h4 style="color:#282a77; font-weight:bold;">Comment Title</h4></label>
					    <input type="text" name="comment_title" class="form-control" id="comment-title" placeholder="Enter Title" required="true">
					  </div>
					  <div class="form-group">
						  <label for="comment"><h4 style="color:#282a77; font-weight:bold;">Your comments:</h4></label>
						  <textarea class="form-control" rows="5" name="comment_msg" id="comment" style="color:#666 !important;"></textarea>
						</div> 
					 </div>
					 
					 <div class="col-sm-5 wow fadeIn" align="left">
						  <div class="form-group">
							<label for="username"><h4 style="color:#282a77; font-weight:bold;">Name</h4></label>
							<input style="width:50%" type="text" class="form-control" name="username" id="user-name" placeholder="Enter name" required="true">						
						  </div>

						  <div class="form-group">
							<label for="usermail"><h4 style="color:#282a77; font-weight:bold;">Email address</h4></label>
							<input style="width:50%" type="email" name="usermail" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email" required="true" autofocus>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>							
						  </div>
						 
						  <button type="submit" class="btn btn-primary" style="background-color:#282a77 !important; color:#fff !important; border-radius:3px !important; margin-left:3px;">Submit</button>
						<!--email box end-->
					 </div>
					 <div class="col-md-1"></div>
						</form>

				</div>

				
				
		</div>

                
 @include('layouts.footer')