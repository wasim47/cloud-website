@include('admin.includes.header')
		
	<div class="right_col" role="main">
	<!-- top tiles -->

		<div class="x_title">
		  <h2>New Menu</h2>                 
		  <div class="clearfix"></div>
		</div>
		
		<div class="x_content">
			<div class="row">
				<!-- <form method="POST" action="/administrator/menus/{{ $menu['id'] }}" class="form-horizontal form-label-left"> -->
				{!! Form::model($menu, ['route'=>['menus.update', $menu->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Menu Name <span class="required">*</span>
						</label> -->
						{!! Form::label('menuname','Menu Name', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="menuname" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('menuname', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						  {!! $errors->has('menuname')?$errors->first('menuname'):'' !!}
						</div>
					</div>

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
						</label> -->
						{!! Form::label('menu_url','Url', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('menu_url', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						</div>
					</div>

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
						</label> -->
						{!! Form::label('sequence','Sequence', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('sequence', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						</div>
					</div>  

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status</span>
						</label> -->
						{!! Form::label('status','Status', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="status" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('status', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						</div>
					</div>                         


					<div class="ln_solid"></div>
						<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <a href="{{ route('menus.index') }}" class="btn btn-primary">Cancel</a>
						  {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}
						</div>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>

 @include('admin.includes.footer')