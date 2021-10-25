@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Member</h2>
                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
          	 {!! Form::model($bloginfo, ['route'=>['blog.update', $bloginfo->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}
            
          	  <div class="col-sm-12">
                	<div class="row">
                
                     <div class="form-group">
                        {!! Form::label('title','Blog Title', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                            {!! Form::text('title', $bloginfo->title, ['class'=>'form-control']) !!}
                            {!! $errors->has('title')?$errors->first('title'):'' !!}
                        </div>
                    </div>
                  			 
                     
                     
                    <div class="form-group">
                        {!! Form::label('short_desc','Short Description', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                            <textarea name="short_desc" class="form-control ckeditor">{{$bloginfo->short_desc}}</textarea>
                            {!! $errors->has('short_desc')?$errors->first('short_desc'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                    
                        {!! Form::label('full_desc','Full Description', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                           <textarea name="full_desc" class="form-control ckeditor">{{$bloginfo->full_desc}}</textarea>
                            {!! $errors->has('full_desc')?$errors->first('full_desc'):'' !!}
                        </div>
                    </div>
   
                    <div class="form-group">
                        {!! Form::label('photo','Photo', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                            {!! Form::file('photo', null, ['class'=>'form-control']) !!}
                            {!! $errors->has('photo')?$errors->first('photo'):'' !!}
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
