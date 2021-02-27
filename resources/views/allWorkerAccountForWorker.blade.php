@extends('layouts.worker_template')
@section('content')

<div class="container" style="margin-left:2%; margin-top:2%;">
  <div class="row">
        <h1>All Worker Accounts</h1>

        <table class="table table-responsive">
          <tr>

            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
          @foreach($data as $row)
          <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>
              @if(session()->has('msg'))
              <p>
                {{session()->get('msg')}}
              </p>
              @else
                <p>
                <a href="{{url('/sendGroupRequest'.$row->id)}}" class="btn btn-sm btn-primary" style="float:right;">Send Group Request</a>
                </p>
              @endif
            </td>
          </tr>
          @endforeach
        </table>
    </div>

  </div>
</div>

@endsection
