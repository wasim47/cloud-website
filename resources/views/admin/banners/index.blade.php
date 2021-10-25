@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
         

          <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Banner List</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-bordered table-striped">
                 	 <thead>
                        <tr>
                            <th>SI</th>
                            <th>Banner Title</th>
                            <th>Photo</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php $i=1; ?>
                    @foreach($banners as $bn)
                    <tr>
                    	<td>{{ $i++ }}</td>
                    	<td>{{ $bn->banner_title}}</td>
                        <td><img src="{{ URL::asset('admin/uploads/banner/'.$bn->banner_image) }}" style="width:150px; height:auto	" /></td>
                        <td>{{ $bn->created_at }}</td>
                        <td>{{ $bn->updated_at }}</td>
                        <td  align="center">
                        
                        {!! Form::open(['method'=>'delete', 'route'=>['banner.destroy', $bn->id]]) !!}                        
                        <a href="{{ route('banner.edit', $bn->id) }}" class="btn btn-warning btn-xs" style="font-size: 12px;">Edit</a>
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs', 'onclick'=>'return confirm("Are you sure you want to delete this record?")']) !!}
						{!! Form::close() !!}						
					</td>
                    </tr>
                     
                	@endforeach 
                    </tbody>   
                 </table>
                  

                </div>
              </div>
            </div>

         
          </div>


          
        </div>
 @include('admin.includes.footer')