@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
         

          <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Member List</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-bordered table-striped">
                 	 <thead>
                        <tr>
                            <th>SI</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php $i=1; ?>
                    @foreach($members as $k=>$menu)
                    <tr>
                    	<td>{{ $i++ }}</td>
                    	<td>{{ $menu->fname.' '.$menu->fname }}</td>
                        <td>{{ $menu->email }}</td>
                        <td>{{ $menu->updated_at }}</td>
                        <td  align="center">
                        
                        {!! Form::open(['method'=>'delete', 'route'=>['member.destroy', $menu->id]]) !!}                        
                        <a href="{{ route('member.edit', $menu->id) }}" class="btn btn-warning btn-xs" style="font-size: 12px;">Edit</a>
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