@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
         

          <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Directors List</h2>
                 
                  <div class="clearfix"></div>
                  <hr>
                  <a href="{{ route('directors.create') }}" class="btn btn-primary">Add New Director</a>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-bordered table-striped">
                 	 <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Short Intro</th>
                            <th>Photo</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($directors as $director)
                    <tr>
                    	<td>{{ $director->first_name." ".$director->last_name  }}</td>
                    	<td>{{ $director->designation}}</td>
                        <td>{{ $director->short_intro }}</td>
                        <td><img src="{{ URL::asset('admin/uploads/directors/'.$director->photo) }}" style="width: 100px; height: auto"></td>
                        <td>{{ $director->email }}</td>
                        <td>{{ $director->contact_no }}</td>
                        <td>{{ $director->address }}</td>
                        <td  align="center">
                        
                        {!! Form::open(['method'=>'delete', 'route'=>['directors.destroy', $director->id]]) !!}                        
                        <a href="{{ route('directors.edit', $director->id) }}" class="btn btn-warning btn-xs" style="font-size: 12px;">Edit</a>
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