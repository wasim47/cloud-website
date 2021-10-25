@include('admin.includes.header')
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="x_panel tile">

        <div class="x_title">
          
          <h2>Questions List</h2>
          <div class="clearfix"></div>
          <hr>
          <a href="{{ route('faqs.create') }}" class="btn btn-primary">Add New Questions</a>

        </div>

        <div class="x_content">

          <table width="100%" class="table table-responsive bordered">

          	<tr>
            	<th>Question</th>
              <th>Answer</th>
              <th>Tag</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th colspan="2">Actions</th>
            </tr>

            @foreach($faqs as $faq)
            <tr>
            	<td>{{ $faq->question }}</td>
              <td>{{ $faq->answer }}</td>
              <td>{{ $faq->tag }}</td>
              <td>{{ $faq->created_at }}</td>
              <td>{{ $faq->updated_at }}</td>
              <td><a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning" style="font-size: 12px;">Edit</a></td>
              <td>{!! Form::open(['method'=>'delete', 'route'=>['faqs.destroy', $faq->id]]) !!}
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