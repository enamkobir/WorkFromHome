@extends('layouts.worker_template')
@section('content')
<div class="container" style="margin-left:2%; margin-top:2%;">
  <div class="row">

        <h2>My Works</h2>

        <table class="table table-responsive">
          <tr>
            <th>Client Name</th>
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
              <a href="{{url('submitClientWork')}}" class="btn btn-sm btn-success">Submit to client</a>
              </p>
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>

@endsection
