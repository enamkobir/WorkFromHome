@extends('layouts.worker_template')
@section('content')
<div class="container" style="margin-left:2%; margin-top:2%;">
  <div class="row">
      <table class="table table-responsive">
        <p>
        <a href="{{url('submitClientWork')}}" class="btn btn-primary">Submit to client</a>
        </p>
      </table>
        <h2>Group Members Work</h2>

        <table class="table table-responsive">
          <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Action</th>
          </tr>
          @foreach($data as $row)
          <tr>
            <td>{{$row->name}}</td>
            <td>
              <p>
              <a href="" class="btn btn-sm btn-primary">Work</a>
              </p>
            </td>
            <td>
              <p>
              <a href="" class="btn btn-sm btn-success">Done</a>
              </p>
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>

@endsection
