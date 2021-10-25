@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Menu</h2>                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
             <div class="row">
                <form method="POST" action="/administrator/menus" class="form-horizontal form-label-left">
                  {{ csrf_field() }}
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Menu Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="menuname" class="form-control col-md-7 col-xs-12">
                    </div>
                    @if($errors->has('menuname'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('menuname') }}                      
                    </label>
                    @endif
                  </div>
                  
                  

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="sequence" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>  
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="status" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button class="btn btn-info" type="reset">Reset</button>
                      <a href="{{ route('menus.index') }}" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>

                </form>
              </div>
            </div>          
        </div>
 @include('admin.includes.footer')