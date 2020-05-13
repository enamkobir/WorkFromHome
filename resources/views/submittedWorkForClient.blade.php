@extends('layouts.client_template')
@section('content')
<div class="container" style="margin-left:2%; margin-top:2%;">
  <div class="row">

        <h2>Submitted Works</h2>

        <table class="table table-responsive">
          <tr>
            <th>Worker Name</th>
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
              <a href="{{url('')}}" class="btn btn-sm btn-warning">Make Payment</a>
              </p>
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>
@endsection
