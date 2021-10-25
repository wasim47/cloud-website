@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
          <div class="x_title">
                  <h2>New Content</h2>                 
                  <div class="clearfix"></div>
                </div>
          <div class="x_content">
             <div class="row">
                <form method="POST" action="/administrator/faqs" class="form-horizontal form-label-left">
                  {{ csrf_field() }}
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="question">Question <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="question" class="form-control col-md-7 col-xs-12"/>
                    </div>
                    @if($errors->has('question'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('question') }}                      
                    </label>
                    @endif
                  </div>                  
                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="answer">Answer <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea name="answer" class="form-control ckeditor"></textarea>
                    </div>
                    @if($errors->has('answer'))
                    <label class="col-md-3 col-sm-3 col-xs-12" style="color: red; display: inline;">
                     {{ $errors->first('answer') }}                      
                    </label>
                    @endif
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tag">Tag</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" name="tag" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  
                  
                  
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button class="btn btn-info" type="reset">Reset</button>
                      <a href="{{ route('faqs.index') }}" class="btn btn-primary">Cancel</a>
                    </div>
                  </div>

                </form>
              </div>
            </div>          
        </div>
 @include('admin.includes.footer')