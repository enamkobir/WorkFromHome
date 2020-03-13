@extends('layouts.admin_template')
@section('content')

  <div class="container" style="margin-left:2%; margin-top:2%;">
  	<div class="row">
      		<h1>All post</h1>

          <table class="table table-responsive">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Details</th>
              <th>Action</th>
            </tr>
            @foreach($data as $row)
            <tr>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->details}}</td>
              <td>
                <p>
                <a href="" class="btn btn-sm btn-success">View</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
                </p>
              </td>
            </tr>
            @endforeach
          </table>
  		</div>

  	</div>
  </div>


@endsection

  <!-- Content Wrapper. Contains page content -->
