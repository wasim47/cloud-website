@include('layouts.user-header')
<script type="text/javascript">
function search_offer(){
	var country = $("#country").val();	
	var category = $("#category").val();
	var date = $("#date").val();
	
	//alert(date);
	$.ajax({
		url:"{{ url('user/offer_filtering') }}",
		type:'GET',
		data:{'country':country,'category':category,'date':date},
		success:function(response){
			//alert(response);
			$("#responseData").html(response);
		},
		error:function(){
			alert(0);
		}
	});
}
</script>
<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
            <div id="page-inner">
                    <div class="row">
                    	<div class="col-sm-8">
                         <div class="col-md-10 col-sm-12 col-xs-12 col-sm-offset-2">
                         	<h2 style="text-align:left; margin:13px">Browse Offer</h2>
                            	<div class="col-sm-10">
                                     <select name="country" id="country" class="custom-input">
                                        @foreach($countries as $count)
                                        	<option value="{{ $count->name }}">{{ $count->name }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="col-sm-10">
                                	<select name="category" id="category" class="custom-input">
                                        @foreach($categories as $count)
                                        <option value="{{ $count->cat_name }}">{{ $count->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-10">
                                	<input type="date" name="searchoffer" id="date" class="custom-input" placeholder="Date" style="padding:2px 5px"/>
                                </div>
                                <div class="col-sm-10">
                                	<input type="button" name="submit" class="custom-btn" onclick="search_offer();" value="Search" />
                                </div>
                         </div>
                    	
                        <div id="responseData" class="col-sm-12" style="margin-top:20px;"></div>
                    </div>
                    <!--leftbar -->
                    
                    @include('layouts.right-panel')
                </div>
                <!-- /. ROW  -->
            <!--<footer><p>Powered By: TechToday &copy 2017 <a href="#">click piper</a></p></footer>--> 
            </div>
            <!-- /. PAGE INNER  -->
        </div>


        
       
                                      	
@include('layouts.user-footer')