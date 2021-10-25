@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Content</h2>                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
             <div class="row">
                <form method="POST" action="/administrator/contents" class="form-horizontal form-label-left">
                  {{ csrf_field() }}
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="title" class="form-control col-md-7 col-xs-12">
                    </div>
                    @if($errors->has('title'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('title') }}                      
                    </label>
                    @endif
                  </div>
                  
                  

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">Content</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea name="content" class="form-control ckeditor"></textarea>
                    </div>
                  </div>


                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu">Menu Item</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="menu_id" class="form-control">
                        <option value="">Select a Menu Item</option>
                        @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->menuname }}</option>
                        @endforeach
                      </select>
                    </div>
                    @if($errors->has('menu_id'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('menu_id') }}                      
                    </label>
                    @endif
                  </div>
                  
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button class="btn btn-info" type="reset">Reset</button>
                      <a href="{{ route('contents.index') }}" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>

                </form>
              </div>
            </div>          
        </div>
 @include('admin.includes.footer')