@include('admin.includes.header')
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="x_panel tile">

        <div class="x_title">
          
          <h2>Content List</h2>
          <div class="clearfix"></div>
          <hr>
          <a href="{{ route('contents.create') }}" class="btn btn-primary">Add New Content</a>

        </div>

        <div class="x_content">

          <table width="100%" class="table table-responsive bordered">

          	<tr>
            	<th>Title</th>
              <th>Content</th>
              <th>Menu Name</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th colspan="2">Actions</th>
            </tr>

            @foreach($contents as $content)
            <tr>
            	<td>{{ $content->title }}</td>
              <td>{{ $content->content }}</td>
              <td>{{ \App\Menu::where(['id' => $content->menu_id])->pluck('menuname')->first() }}</td>
              <td>{{ $content->created_at }}</td>
              <td>{{ $content->updated_at }}</td>
              <td><a href="{{ route('contents.edit', $content->id) }}" class="btn btn-warning" style="font-size: 12px;">Edit</a></td>
              <td>{!! Form::open(['method'=>'delete', 'route'=>['contents.destroy', $content->id]]) !!}
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