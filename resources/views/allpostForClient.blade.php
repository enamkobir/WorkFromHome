@extends('layouts.client_template')
@section('content')

<div class="container" style=" margin-top:2%; margin:0%">
  <div class="row">

      <div class="col-md-10 col-md-offset-4">

        <h1>All post</h1>

        <table class="table table-responsive">
          <tr style="background-color:#D6DBDF">
            <th>Name</th>
            <th>Email</th>
            <th>Details</th>
            <th>Duration</th>
            <th>Action</th>
          </tr>
          @foreach($data as $row)
          <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->details}}</td>
            <td>{{$row->duration}}</td>
            <td>
              <p>
              <a href="{{'/view/singlePost'.$row->id}}" class="btn btn-sm btn-success">View</a>
              <a href="{{'/edit/singlePost'.$row->id}}" class="btn btn-sm btn-warning">Edit</a>
              <a href="{{'/delete/singlePost'.$row->id}}" class="btn btn-sm btn-danger">Delete</a>
              </p>
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>



@endsection
