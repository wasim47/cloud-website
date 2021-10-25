@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Offer</h2>
                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
          	 {!! Form::model($offerinfo, ['route'=>['offer.update', $offerinfo->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}
            
          	  <div class="col-sm-12">
                <div class="row">
                
                     <div class="form-group">
                        {!! Form::label('title','Title', ['class'=>'control-label col-md-2']) !!}
                        <div class="col-md-9">
                            {!! Form::text('title', $offerinfo->title, ['class'=>'form-control']) !!}
                            {!! $errors->has('title')?$errors->first('title'):'' !!}
                        </div>
                    </div>
                  			 
                      <div class="form-group">
                        {!! Form::label('action_link','Action Link', ['class'=>'control-label col-md-2']) !!}
                        <div class="col-md-9">
                            {!! Form::text('action_link', $offerinfo->action_link, ['class'=>'form-control']) !!}
                            {!! $errors->has('action_link')?$errors->first('action_link'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('points','Points', ['class'=>'control-label col-md-2']) !!}
                        <div class="col-md-9">
                            {!! Form::text('points', $offerinfo->points, ['class'=>'form-control']) !!}
                            {!! $errors->has('points')?$errors->first('points'):'' !!}
                        </div>
                    </div>
                    
                     
                    
                    <div class="form-group">
                        {!! Form::label('rewards_amount','Rewards Amount', ['class'=>'control-label col-md-2']) !!}
                        <div class="col-md-9">
                            {!! Form::text('rewards_amount', $offerinfo->rewards_amount, ['class'=>'form-control']) !!}
                            {!! $errors->has('rewards_amount')?$errors->first('rewards_amount'):'' !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('date','Date', ['class'=>'control-label col-md-2']) !!}
                        <div class="col-md-9">
                            {!! Form::date('date', $offerinfo->date, ['class'=>'form-control']) !!}
                            {!! $errors->has('date')?$errors->first('date'):'' !!}
                        </div>
                    </div>
                  
                    <div class="form-group">
                    
                        {!! Form::label('full_desc','Full Description', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                           <textarea name="full_desc" class="form-control ckeditor">{{ $offerinfo->full_desc }}</textarea>
                            {!! $errors->has('full_desc')?$errors->first('full_desc'):'' !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                    
                        {!! Form::label('note','Note', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                           <textarea name="note" class="form-control ckeditor">{{ $offerinfo->note }}</textarea>
                            {!! $errors->has('note')?$errors->first('note'):'' !!}
                        </div>
                    </div>
   
   					<div class="form-group">
                        {!! Form::label('allowed_country','Country', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            <select name="allowed_country" class="form-control">
                            	<option value="{{ $offerinfo->country }}">{{ $offerinfo->country }}</option>
                            	@foreach($countries as $count)
                            	<option value="{{ $count->name }}">{{ $count->name }}</option>
                                @endforeach
                            </select>
                            {!! $errors->has('allowed_country')?$errors->first('allowed_country'):'' !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('category','Category', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            <select name="category" class="form-control">
                            	<option value="{{ $offerinfo->category }}">{{ $offerinfo->category }}</option>
                            	@foreach($categories as $count)
                            	<option value="{{ $count->cat_name }}">{{ $count->cat_name }}</option>
                                @endforeach
                            </select>
                            {!! $errors->has('category')?$errors->first('category'):'' !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('photo','Photo', ['class'=>'control-label col-md-2']) !!}
                         <div class="col-md-9">
                            {!! Form::file('photo', $offerinfo->photo, ['class'=>'form-control']) !!}
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
