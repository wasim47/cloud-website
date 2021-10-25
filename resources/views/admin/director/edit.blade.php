@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Member</h2>
                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
          <div class="row">
            
            {!! Form::model($directorInfo, ['route'=>['directors.update', $directorInfo->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Menu Name <span class="required">*</span>
                </label> -->
                {!! Form::label('first_name','First Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="menuname" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::text('first_name', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
                @if($errors->has('first_name'))
                  <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                   {{ $errors->first('first_name') }}                      
                  </label>
                @endif
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Menu Name <span class="required">*</span>
                </label> -->
                {!! Form::label('last_name','Last Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="menuname" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::text('last_name', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
                @if($errors->has('last_name'))
                  <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                   {{ $errors->first('last_name') }}                      
                  </label>
                @endif
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('designation','Designation', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::text('designation', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('short_intro','Short Intro', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::textarea('short_intro', null, ['class'=>'form-control col-md-7 col-xs-12 ckeditor']) !!}
                </div>
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('email','Email', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::email('email', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
                @if($errors->has('email'))
                  <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                   {{ $errors->first('email') }}                      
                  </label>
                @endif
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('contact_no','Contact No', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::text('contact_no', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
                @if($errors->has('contact_no'))
                  <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                   {{ $errors->first('contact_no') }}                      
                  </label>
                @endif
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('facebook_id','FaceBook Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::text('facebook_id', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('twitter_id','Twitter Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::text('twitter_id', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('linkedin_id','LinkedIn Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::text('linkedin_id', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
              </div>

              <div class="form-group">
                <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                </label> -->
                {!! Form::label('photo','Photo', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
                  {!! Form::file('photo', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
                </div>
                @if($errors->has('photo'))
                  <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                   {{ $errors->first('photo') }}                      
                  </label>
                @endif
              </div>


              <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a href="{{ route('directors.index') }}" class="btn btn-primary">Cancel</a>
                  {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}
                </div>
              </div>

            {!! Form::close() !!}
          </div>
        </div>

          
        </div>
 @include('admin.includes.footer')
