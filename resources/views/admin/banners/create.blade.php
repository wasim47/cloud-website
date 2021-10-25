@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Banner</h2>
                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
          	{!! Form::open(['url'=>'administrator/banner','files' => true, 'class'=>'form-horizontal']) !!}
            
          	  <div class="col-sm-12">
                <div class="row">
                
                     <div class="form-group">
                        {!! Form::label('banner_title','Banner Title', ['class'=>'control-label col-md-2']) !!}
                        <div class="col-md-9">
                            {!! Form::text('banner_title', null, ['class'=>'form-control']) !!}
                            {!! $errors->has('banner_title')?$errors->first('banner_title'):'' !!}
                        </div>
                    </div>
                  			 
                     
                  
   
                    <div class="form-group">
                        {!! Form::label('banner_image','Photo', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                            {!! Form::file('banner_image', null, ['class'=>'form-control']) !!}
                            {!! $errors->has('banner_image')?$errors->first('banner_image'):'' !!}
                        </div>
                    </div>
			
                     

					
              </div>
           		<div class="form-group">
				<div class="col-md-10 col-md-offset-5" style="margin-top:20px;">
					{!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
                    {!! Form::reset('Reset', ['class'=>'btn btn-danger']) !!}
				</div>
			</div>
              </div>
              {!! Form::close() !!}	 
			</div>

          
        </div>
 @include('admin.includes.footer')