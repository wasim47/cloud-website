@include('admin.includes.header')
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="x_panel tile">

        <div class="x_title">
          
          <h2>Menu List</h2>
          <div class="clearfix"></div>
          <hr>
          <a href="{{ route('administrator.create') }}" class="btn btn-primary">Add New Admin</a>

        </div>

        <div class="x_content">

          <table width="100%" class="table table-responsive bordered">

          	<tr>
            	<th>Name</th>
              <th>Email</th>
              <th>User Type</th>
              <th colspan="2">Actions</th>
            </tr>

            @foreach($admins as $menu)
            <tr>
            	<td>{{ $menu->name }}</td>
              <td>{{ $menu->email }}</td>
              <td>{{ $menu->user_type }}</td>
              <td><a href="{{ route('administrator.edit', $menu->id) }}" class="btn btn-warning" style="font-size: 12px;">Edit</a></td>
              <td>{!! Form::open(['method'=>'delete', 'route'=>['administrator.destroy', $menu->id]]) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger custom-delete-button', 'onclick'=>'return confirm("Are you sure you want to delete this record?")']) !!}
            {!! Form::close() !!}</td>
            </tr>
            @endforeach

          </table>

        </div>

      </div>

    </div>

  </div>

</div>
 @include('admin.includes.footer')