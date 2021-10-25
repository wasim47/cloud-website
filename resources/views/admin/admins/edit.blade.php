@include('admin.includes.header')
		
	<div class="right_col" role="main">
	<!-- top tiles -->

		<div class="x_title">
		  <h2>Edit Admin</h2>                 
		  <div class="clearfix"></div>
		</div>
		
		<div class="x_content">
			<div class="row">
                {!! Form::model($admininfo, ['route'=>['administrator.update', $admininfo->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Admin Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="name" class="form-control col-md-7 col-xs-12" value="{{ $admininfo->name }}">
                    </div>
                    @if($errors->has('name'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('name') }}                      
                    </label>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Email <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="email" name="email" class="form-control col-md-7 col-xs-12" value="{{ $admininfo->email }}">
                    </div>
                    @if($errors->has('email'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('email') }}                      
                    </label>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">User Type <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="user_type" class="form-control">
                      	<option value="{{ $admininfo->user_type }}">{{ $admininfo->user_type }}</option>
                        <option value="Super Admin">Super Admin</option>
                        <option value="Sub Admin">Sub Admin</option>
                        <option value="Moderator">Moderator</option>
                        <option value="Editor">Editor</option>
                      </select>
                    </div>
                    @if($errors->has('user_type'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('user_type') }}                      
                    </label>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Password <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="password" name="password" class="form-control col-md-7 col-xs-12" value="{{ $admininfo->password }}">
                    </div>
                    @if($errors->has('password'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('password') }}                      
                    </label>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Re-type Password <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="password" name="password_confirmation" class="form-control col-md-7 col-xs-12" value="{{ $admininfo->password }}">
                    </div>
                    @if($errors->has('password_confirmation'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('password_confirmation') }}                      
                    </label>
                    @endif
                  </div>
                  
                  

                 
                  
                  
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button class="btn btn-info" type="reset">Reset</button>
                      <a href="{{ route('administrator.adminlist') }}" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>

                </form>
              </div>
		</div>
	</div>

 @include('admin.includes.footer')