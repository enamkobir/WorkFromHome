@extends('layouts.client_template')
@section('content')

<div class="container" style=" margin-top:2%; margin:0%">
  <div class="row">

      <div class="col-md-10 col-md-offset-4">

        <h1>Your Post</h1>

        <table class="table table-responsive">
          <tr style="background-color:#AED6F1">
            <th>Name</th>
            <th>Email</th>
            <th>Details</th>
            <th>Action</th>
          </tr>
          <tr>
            <td>{{$single->name}}</td>
            <td>{{$single->email}}</td>
            <td>{{$single->details}}</td>
            <td>
              <p>
              <a href="" class="btn btn-sm btn-primary">Worker</a>
              <a href="" class="btn btn-sm btn-success">Payment</a>
              </p>
            </td>
          </tr>
        </table>
    </div>
  </div>
</div>

@endsection
