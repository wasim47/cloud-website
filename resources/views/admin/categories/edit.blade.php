@include('admin.includes.header')
		
	<div class="right_col" role="main">
	<!-- top tiles -->

		<div class="x_title">
		  <h2>New Category</h2>                 
		  <div class="clearfix"></div>
		</div>
		
		<div class="x_content">
			<div class="row">
				<!-- <form method="POST" action="/administrator/categories/{{ $menu['id'] }}" class="form-horizontal form-label-left"> -->
				{!! Form::model($category, ['route'=>['categories.update', $category->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_name">Category Name <span class="required">*</span>
						</label> -->
						{!! Form::label('cat_name','Category Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="cat_name" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('cat_name', $category->cat_name, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						  {!! $errors->has('cat_name')?$errors->first('cat_name'):'' !!}
						</div>
					</div>

				
					<div class="ln_solid"></div>
						<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <a href="{{ route('categories.index') }}" class="btn btn-primary">Cancel</a>
						  {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}
						</div>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>

 @include('admin.includes.footer')