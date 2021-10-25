     @include('layout.header')
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        <h1>Contact Us /</h1>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
		<!-- PART ONE-->
		<div class="container">
	            <div class="row">
				 <div class="col-sm-7 contact-form wow fadeInLeft">
				 <h2>Company Address</h2>
				 <table class="table">
				 <tr>
				 <td>
				 <h5 class="corp_off">Corporate Office :<h5>
				 <p align="left">
				 56, Younus Ali Road, Tongi, Gazipur -1710, Bangladesh, Phone : +880 1912001798
				 </p>
				 </td>
				 <td>
				  <h5 class="corp_off">Corporate Office :<h5>
				 <p align="left">
				 56, Younus Ali Road, Tongi, Gazipur -1710, Bangladesh, Phone : +880 1912001798
				 </p>
				 </td>
				 </tr>
				 </table>
				 </div>
				 <div class="col-sm-5 contact-address wow fadeInUp">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58360.48719132467!2d90.35725871626853!3d23.906263554066843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4488706e2d9%3A0xee45004fa6ba8d03!2z4Kaf4KaZ4KeN4KaX4KeA!5e0!3m2!1sbn!2sbd!4v1505039887358"  height="250" frameborder="0" style="border:1px solid #ccc" allowfullscreen></iframe>
				 </div>
				</div>
				
				</div>
        	<div class="container">
	            <div class="row">
				<div class="col-md-3"></div>
	                <div class="col-sm-6 contact-form wow fadeInLeft">
	                    <p>
	                    	Please use the form bellow for general inquiries.We generally respond 
							to all emails within normal business hours : Monday through Friday,
							8am - 5pam EST/7am - 4pm CST
	                    </p>
	                    <form role="form" action="assets/sendmail.php" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Full Name</label>
	                        	<input type="text" name="name" placeholder="Enter your name..." class="contact-name" id="contact-name">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email Address</label>
	                        	<input type="text" name="email" placeholder="Enter your email..." class="contact-email" id="contact-email">
	                        </div>
	                        
							 <div class="form-group">
	                        	<label for="contact-subject">User ID</label>
	                        	<input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
	                        </div>
							
							<div class="form-group">
	                        	<label for="contact-subject">Phone Number</label>
	                        	<input type="text" name="subject" placeholder="Your subject..." class="contact-subject" id="contact-subject">
	                        </div>
							
							<div class="form-group">
	                        	<label for="contact-subject">Department</label>
	                        	<input type="text" name="subject" placeholder="User support" class="contact-subject" id="contact-subject">
	                        </div>
							
							
							
	                        <div class="form-group">
	                        	<label for="contact-message">Your Comment</label>
	                        	<textarea name="message" placeholder="Your message..." class="contact-message" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Send</button>
	                    </form>
	                </div>
					<div class="col-md-3">
					
					</div>
	               
	            </div>
	        </div>
        </div>

               
 @include('layout.footer')