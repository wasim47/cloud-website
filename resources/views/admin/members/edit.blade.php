@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Member</h2>
                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
            {!! Form::model($memberinfo, ['route'=>['member.update', $memberinfo->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}
            
          	  <div class="col-sm-12">
              	<div class="col-sm-6">
                	<div class="row">
                
                     <div class="form-group">
                        {!! Form::label('fname','First Name', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('fname', $memberinfo->fname, ['class'=>'form-control']) !!}
                            {!! $errors->has('fname')?$errors->first('fname'):'' !!}
                        </div>
                    </div>
                   <div class="form-group">
                        {!! Form::label('lname','Last Name', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('lname', $memberinfo->lname, ['class'=>'form-control']) !!}
                            {!! $errors->has('lname')?$errors->first('lname'):'' !!}
                        </div>
                    </div>
					 <div class="form-group">
                        {!! Form::label('company','Company Name', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('company', $memberinfo->company, ['class'=>'form-control']) !!}
                            {!! $errors->has('company')?$errors->first('company'):'' !!}
                        </div>
                    </div>
                     <div class="form-group">
                        {!! Form::label('email','Email Address', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::email('email', $memberinfo->email, ['class'=>'form-control']) !!}
                            {!! $errors->has('email')?$errors->first('email'):'' !!}
                        </div>
                    </div>
                     <div class="form-group">
                        {!! Form::label('password','Password', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                            {!! $errors->has('password')?$errors->first('password'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('messenger','Messenger IM', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('messenger', $memberinfo->messenger, ['class'=>'form-control']) !!}
                            {!! $errors->has('messenger')?$errors->first('messenger'):'' !!}
                        </div>
                    </div>
                     <div class="form-group">
                        {!! Form::label('messenger_id','Mesenger IM ID', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('messenger_id', $memberinfo->messenger_id, ['class'=>'form-control']) !!}
                            {!! $errors->has('messenger_id')?$errors->first('messenger_id'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone','Phone No', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('phone', $memberinfo->phone, ['class'=>'form-control']) !!}
                            {!! $errors->has('phone')?$errors->first('phone'):'' !!}
                        </div>
                    </div>
                     <div class="form-group">
                        {!! Form::label('country','Country', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            <select name="country" class="form-control">
                            	<option value="{{ $memberinfo->country }}">{{ $memberinfo->country }}</option>
                            	@foreach($countries as $count)
                            	<option value="{{ $count->name }}">{{ $count->name }}</option>
                                @endforeach
                            </select>
                            {!! $errors->has('country')?$errors->first('country'):'' !!}
                        </div>
                    </div>

					
              </div>
                </div>
                <div class="col-sm-6">
                	<div class="row">
                   
                    <div class="form-group">
                        {!! Form::label('city','City', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('city', $memberinfo->city, ['class'=>'form-control']) !!}
                            {!! $errors->has('city')?$errors->first('city'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('state','State', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('state', $memberinfo->state, ['class'=>'form-control']) !!}
                            {!! $errors->has('state')?$errors->first('state'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('zipcode','Zip Code', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::text('zipcode', $memberinfo->zipcode, ['class'=>'form-control']) !!}
                            {!! $errors->has('zipcode')?$errors->first('zipcode'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('dob','Date of Birth', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::date('dob', \Carbon\Carbon::now(), ['class'=>'form-control']) !!}
                            {!! $errors->has('dob')?$errors->first('dob'):'' !!}
                        </div>
                    </div>
                   
                   <div class="form-group">
                        {!! Form::label('address1','Address 1', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            <textarea name="address1" class="form-control">{{$memberinfo->address1}}</textarea>
                            {!! $errors->has('address1')?$errors->first('photo'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                    
                        {!! Form::label('photo','Address 2', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                           <textarea name="address2" class="form-control">{{$memberinfo->address2}}</textarea>
                            {!! $errors->has('address2')?$errors->first('address2'):'' !!}
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        {!! Form::label('gender','Gender', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                             {!! Form::radio('gender', 'Male', false) !!} Male 
                            {!! Form::radio('gender', 'Female', false) !!} Female 
                            {!! $errors->has('gender')?$errors->first('gender'):'' !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('photo','Photo', ['class'=>'control-label col-md-3']) !!}
                        <div class="col-md-8">
                            {!! Form::file('photo', null, ['class'=>'form-control']) !!}
                            {!! $errors->has('photo')?$errors->first('photo'):'' !!}
                        </div>
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