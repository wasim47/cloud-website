@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Category</h2>                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
             <div class="row">
                <form method="POST" action="/administrator/categories" class="form-horizontal form-label-left">
                  {{ csrf_field() }}
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_name">Category Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="cat_name" class="form-control col-md-7 col-xs-12">
                    </div>
                    @if($errors->has('cat_name'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('cat_name') }}                      
                    </label>
                    @endif
                  </div>

                  
                  
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button class="btn btn-info" type="reset">Reset</button>
                      <a href="{{ route('categories.index') }}" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>

                </form>
              </div>
            </div>          
        </div>
 @include('admin.includes.footer')