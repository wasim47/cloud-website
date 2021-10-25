@include('admin.includes.header')
		
	<div class="right_col" role="main">
	<!-- top tiles -->

		<div class="x_title">
		  <h2>Edit Faq</h2>                 
		  <div class="clearfix"></div>
		</div>
		
		<div class="x_content">
			<div class="row">
				
				{!! Form::model($faqData, ['route'=>['faqs.update', $faqData->id], 'method'=>'PATCH', 'class'=>'form-horizontal']) !!}

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menuname">Menu Name <span class="required">*</span>
						</label> -->
						{!! Form::label('question','Question', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="menuname" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('question', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						  {!! $errors->has('question')?$errors->first('question'):'' !!}
						</div>
					</div>

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sequence">Sequence</span>
						</label> -->
						{!! Form::label('answer','Answer', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="sequence" required="required" class="form-control col-md-7 col-xs-12"> -->
						  <textarea name="answer" class="form-control ckeditor">{{ $faqData->answer }}</textarea>
						  {!! $errors->has('answer')?$errors->first('answer'):'' !!}
						</div>
					</div>

					<div class="form-group">
						<!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status</span>
						</label> -->
						{!! Form::label('tag','Tag', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <!-- <input type="text" name="status" required="required" class="form-control col-md-7 col-xs-12"> -->
						  {!! Form::text('tag', null, ['class'=>'form-control col-md-7 col-xs-12']) !!}
						</div>
					</div>

					<div class="ln_solid"></div>
						<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <a href="{{ route('faqs.index') }}" class="btn btn-primary">Cancel</a>
						  {!! Form::submit('Update', ['class'=>'btn btn-info']) !!}
						</div>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>

 @include('admin.includes.footer')