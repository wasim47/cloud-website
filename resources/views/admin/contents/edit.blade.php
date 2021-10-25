@include('admin.includes.header')
		
	<div class="right_col" role="main">
	<!-- top tiles -->

		<div class="x_title">
		  <h2>Edit Menu</h2>                 
		  <div class="clearfix"></div>
		</div>
		
		<div class="x_content">
			<div class="row">
				
				{!! Form::model($contentData, ['route'=>['contents.update', $contentData->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Menu Name <span class="required">*</span>
						</label> -->
						{!! Form::label('title','Title', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="menuname" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('title', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						  {!! $errors->has('title')?$errors->first('title'):'' !!}
						</div>
					</div>

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
						</label> -->
						{!! Form::label('content','Content', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <textarea name="content" class="form-control ckeditor">{{ $contentData->content }}</textarea>
						</div>
					</div>

					<div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu">Menu Item</span>
	                    </label>
	                    <div class="col-md-6 col-sm-6 col-xs-12">
	                      <select name="menu_id" class="form-control">
	                        <option value="{{ $contentData->menu_id }}">{{ $menuData->menuname }}</option>
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
						  <a href="{{ route('contents.index') }}" class="btn btn-primary">Cancel</a>
						  {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}
						</div>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>

 @include('admin.includes.footer')