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
          <a href="{{ route('menus.create') }}" class="btn btn-primary">Add Menu Item</a>

        </div>

        <div class="x_content">

          <table width="100%" class="table table-responsive bordered">

          	<tr>
            	<th>Menu Name</th>
              <th>Slug</th>
              <th>Sequence</th>
              <th>Status</th>
              <th>Url</th>
              <th colspan="2">Actions</th>
            </tr>

            @foreach($menus as $menu)
            <tr>
            	<td>{{ $menu->menuname }}</td>
              <td>{{ $menu->slug }}</td>
              <td>{{ $menu->sequence }}</td>
              <td>{{ $menu->status }}</td>
              <td>{{ $menu->menu_url }}</td>
              <td><a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning" style="font-size: 12px;">Edit</a></td>
              <td>{!! Form::open(['method'=>'delete', 'route'=>['menus.destroy', $menu->id]]) !!}
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