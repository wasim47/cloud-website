@include('admin.includes.header')
   <div class="right_col" role="main">
      <!-- top tiles -->
      
      <div class="x_title">
        <h2>New Director</h2>
       
        <div class="clearfix"></div>                  
      </div>
      <div class="x_content">
      	<form method="POST" action="/administrator/directors" class="form-horizontal form-label-left" enctype="multipart/form-data">
          {{ csrf_field() }}
          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="first_name" class="form-control col-md-7 col-xs-12">
            </div>
            @if($errors->has('first_name'))
            <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
             {{ $errors->first('first_name') }}                      
            </label>
            @endif
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="last_name" class="form-control col-md-7 col-xs-12">
            </div>
            @if($errors->has('last_name'))
            <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
             {{ $errors->first('last_name') }}                      
            </label>
            @endif
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">Designation
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="designation" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="short_intro">Short Intro
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea name="short_intro" class="form-control col-md-6 col-xs-12 ckeditor"></textarea> 
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">
            *</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" name="email" class="form-control col-md-7 col-xs-12">
            </div>
            @if($errors->has('email'))
            <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
             {{ $errors->first('email') }}                      
            </label>
            @endif
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact_no">Contact No<span class="required">
            *</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="contact_no" class="form-control col-md-7 col-xs-12">
            </div>
            @if($errors->has('contact_no'))
            <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
             {{ $errors->first('contact_no') }}                      
            </label>
            @endif
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="facebook_id">FaceBook Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="facebook_id" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="twitter_id">Twitter Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="twitter_id" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="linkedin_id">LinkedIn Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="linkedin_id" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
              {!! Form::label('photo','Photo', ['class'=>'control-label control-label col-md-3 col-sm-3 col-xs-12']) !!}
               <div class="col-md-6 col-sm-6 col-xs-12">
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
              <button type="submit" class="btn btn-success">Submit</button>
              <button class="btn btn-info" type="reset">Reset</button>
              <a href="{{ route('directors.index') }}" class="btn btn-primary">Cancel</a>
            </div>
          </div>
        </form>
      </div>        
  </div>
 @include('admin.includes.footer')