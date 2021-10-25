     @include('layouts.header')
		
		 <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-user"></i>
                        <h1>Frequently Asked Questions</h1>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        <div class="container">
	       <div class="row">
		    
			<div class="panel-group" id="accordion">
            <?php $i=1;?>
            @foreach($faqs as $k=>$faq)
            <?php 
            if($k==0){
              $cls = 'in';
            }
            else{
            	 $cls = '';
            }
            $i++;
            ?>
			  <div class="panel panel-default">

					<div class="panel-heading" align="left">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
					{{$faq->question}}</a>
				  </h4>
				</div>
				<div id="collapse<?php echo $i;?>" class="panel-collapse collapse <?php echo $cls;?>">
				  <div class="panel-body" align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				  {{$faq->answer}}</div>
				</div>
			  </div>
			 @endforeach
			</div> 
	                
	     </div>
	   </div>
        </div>
	<!-- comment box -->	
		<div class="container">
			 <div class="row">
				<div class="col-sm-12 wow fadeIn" align="left">
                   
                    <h4 style="color:#f37553; font-weight:bold;"><i class="fa fa-user"></i>  Leave Questions</h4>
                        
                 </div>
				 <div class="col-sm-6 wow fadeIn" align="left">
				  <div class="form-group">
					  <label for="comment"><h4 style="color:#282a77; font-weight:bold;">Your comments:</h4></label>
					  <textarea class="form-control" rows="5" id="comment" style="color:#666 !important;"></textarea>
					</div> 
				 </div>
				 
				  <div class="col-sm-6 wow fadeIn" align="left">
				<!-- email box-->
				<form>
					  <div class="form-group">
						<label for="exampleInputEmail1"><h4 style="color:#282a77; font-weight:bold;">Email address</h4></label>
						<input style="width:50%" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					 
					  <button type="submit" class="btn btn-primary" style="background-color:#282a77 !important; color:#fff !important; border-radius:3px !important; margin-left:3px;">Submit</button>
					</form>
					<!--email box--end-->
				 </div>
			 </div>
		</div>

		<br><br>
               
 @include('layouts.footer')